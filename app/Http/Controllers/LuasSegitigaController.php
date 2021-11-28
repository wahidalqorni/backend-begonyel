<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LuasSegitigaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->all());
        //persiapan data yg akan dikirim ke view
        $titleBar = 'Begonyel - Luas Segitiga';
        $title = 'Luas Segitiga';

        //saat form/view belum menerima request data
        $alas = 0;
        $tinggi = 0;
        $luas = 0;

        //form telah menerima data request
        if ($request->alas != '' && $request->tinggi != '' || $request->alas != null && $request->tinggi != null) {
            $alas = $request->alas;
            $tinggi = $request->tinggi;
            $luas = 1/2 * $alas * $tinggi;
        }

        //mengirim data ke view
        return view('segitiga', [
            'titlebar' => $titleBar,
            'title' => $title,
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' => $luas, //isi data yg bakal dikirim
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
