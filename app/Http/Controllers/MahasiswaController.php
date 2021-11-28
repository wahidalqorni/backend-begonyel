<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // form input nilai mahasiswa
    public function create()
    {
        $title = 'Nilai Mahasiswa';
        $titleBar = 'Begonyel - Nilai Mahasiswa';
        return view('mahasiswa.inputnilai',[
            'title' => $title,
            'titlebar' => $titleBar
        ]);
    }

    // store data
    public function store(Request $request)
    {
        //mengambil isi nilai dari inputan name = nilai_akhir
        $nilai_akhir = $request->nilai_akhir;
        $hasil = 0;
        if($nilai_akhir >= 80 && $nilai_akhir <= 100  ){
            $hasil = 'A';
        } elseif($nilai_akhir >= 75 && $nilai_akhir <= 79) {
            $hasil = 'B';
        } elseif($nilai_akhir >= 60 && $nilai_akhir <= 74  ) {
            $hasil = 'C';
        } elseif($nilai_akhir >= 50 && $nilai_akhir <= 59) {
            $hasil = 'D';
        } else {
            $hasil = 'E';
        }

        return redirect('mahasiswa/hasilnilai')->with([
            'hasilnya' => $hasil
        ]);

    }

    // hasil nilai
    public function hasil()
    {
        return view('mahasiswa.hasilnilai',[
            'titlebar' => 'Hasil Nilai'
        ]);
    }

}
