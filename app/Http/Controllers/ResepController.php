<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

        $items = Resep::all();
        return view('resep.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Request::isMethod('get')) {
            # code...
            $items['koki'] = Koki::all();
            return view('resep.create', $items);
        } elseif (Request::isMethod('post')) {
            # code...
            $item = array('nama' => Input::get('nama')
                , 'kode' => Input::get('kode')
                , 'koki_id' => Input::get('koki_id'));
            resep::create($item);
            return redirect('resep');
        }
        /*
    // Cara 1
    $item = new Bahan();
    $item->nama = "tepung maizena";
    $item->kode = "BHN01";
    $item->save();

    // Cara 2
    // $item = array('nama' => "telur ayam",
    //                'kode' => "BHN02"
    //                 );
    // Bahan::create($item);
     */

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
            $item['resep'] = resep::find($id);
            $item['koki']  = Koki::all();
            return view('resep.update', $item);
        } elseif (Request::isMethod('post')) {
            # code...
            $item          = resep::find($id);
            $item->nama    = Input::get('nama');
            $item->kode    = Input::get('kode');
            $item->koki_id = Input::get('koki_id');
            $item->save();
            return redirect('resep');
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
