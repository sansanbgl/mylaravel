<?php

namespace App\Http\Controllers;

use Request;
use Input;
use App\Models\Bahan;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $item['items'] = Bahan::all()->first();
         $keranjang['bahan'] = Bahan::all();
         return view('index',$keranjang);
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
            return view('create');
        }
        elseif (Request::isMethod('post')) {
            # code...
           $item = array('nama' => Input::get('nama')
                       ,'kode' => Input::get('kode'));
            Bahan::create($item); 
            return redirect('bahan');
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
            $item['bahan'] = Bahan::find($id);    
            return view('update',$item);
        }
        elseif (Request::isMethod('post')) {
            # code...
            $item = Bahan::find($id);
            $item->nama = Input::get('nama');
            $item->kode = Input::get('kode');
            $item->save();
           return redirect('bahan');
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
        $item = Bahan::find($id);
        $item->delete();
        return redirect('bahan');
    }
}
