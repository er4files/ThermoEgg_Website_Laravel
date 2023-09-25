<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KirimData;

class KirimDataController extends Controller
{
    public function kirimsuhu()
    {
        $grafik = KirimData::select('suhu')->get();
        return view('kirimsuhu', ['nilaigrafik' => $grafik]);
    }

    public function kirimkelembaban()
    {
        $grafik = KirimData::select('kelembaban')->get();
        return view('kirimkelembaban', ['nilaigrafik' => $grafik]);
    }

    public function simpangrafik($nilaisuhu, $nilaikelembaban)
    {
        $grafik = new KirimData();
        $grafik->suhu = $nilaisuhu;
        $grafik->kelembaban = $nilaikelembaban;
        $grafik->save();

        return response()->json(['success' => true]);
    }
}
