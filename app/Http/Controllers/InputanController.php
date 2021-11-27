<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // jika data tidak kosong, maka tampilkan isinya
        // if($request->all()){
        //     dd($request->all());
        // }

        //fungsi pertama kali yg akan dieksekusi
        $titleBar = 'Begonyel - Input PRODUCT';
        $title = 'Input PRODUCT';

        //saat form/view belum menerima request data
        $nama_produk = '';
        $harga = '';
        
        //form telah menerima data request
        if ($request->nama_produk != '' && $request->harga != '' || $request->nama_produk != null && $request->harga != null) {
            $nama_produk = $request->nama_produk;
            $harga = $request->harga;
        }

        //mengirim data ke view
        return view('inputan', [
            'titlebar' => $titleBar,
            'title' => $title,
            'nama_produk' => $nama_produk,
            'harga' => $harga, //isi data yg bakal dikirim
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
