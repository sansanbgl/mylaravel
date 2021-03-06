<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Koki;
use Input;
use Request;

class KokiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items['koki'] = Koki::all();
        return view('koki.index', $items);
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
            return view('koki.create');
        } elseif (Request::isMethod('post')) {
            # code...
            $item = array('nama' => Input::get('nama')
                , 'kode' => Input::get('kode'));
            Koki::create($item);
            return redirect('koki');
        }

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

    public function detail($id)
    {
        $koki     = Koki::findOrFail($id);
        $someitem = 'a';
        return view('koki.detail', compact('koki', 'someitem'));

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
            $item['koki'] = Koki::find($id);
            return view('koki.update', $item);
        } elseif (Request::isMethod('post')) {
            # code...
            $item       = Koki::find($id);
            $item->nama = Input::get('nama');
            $item->kode = Input::get('kode');
            $item->save();
            return redirect('koki');
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
        $item = Koki::find($id);
        $item->delete();
        return redirect('bahan');
    }
}
