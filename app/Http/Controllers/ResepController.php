<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bahan;
use App\Models\Koki;
use App\Models\Resep;
use Input;
use Request;

class ResepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items['items'] = Resep::all();
        return view('resep.index', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Request::isMethod('get')) {
            $bahans = Bahan::get();
            $kokis  = Koki::get();
            return view('resep.create', compact('bahans', 'kokis'));

        } elseif (Request::isMethod('post')) {

            $newResep  = Resep::create(Input::all());
            $bahan_ids = Input::get('bahan_ids');
            $newResep->bahan()->attach($bahan_ids);

            return redirect('resep/detail/' . $newResep->id);
        }

    }

    public function detail($id)
    {
        $item = Resep::findOrFail($id);
        return view('resep.detail', compact('item'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if (Request::isMethod("get")) {
            # code...
            $resep  = Resep::find($id);
            $bahans = Bahan::get();
            return view('resep.update', compact('bahans', 'resep'));
        } elseif (Request::isMethod('post')) {
            # code...
            $resep       = Resep::findOrFail($id);
            $newBahanIds = Input::get('bahan_ids');
            $resep->bahan()->sync($newBahanIds);
            return redirect('resep/detail/' . $resep->id);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $item = Resep::find($id);
        $item->delete();
        return redirect('bahan');
    }
}
