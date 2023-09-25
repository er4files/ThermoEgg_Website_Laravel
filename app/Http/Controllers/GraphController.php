<?php

namespace App\Http\Controllers;

use App\Models\GraphModels;
use Illuminate\Http\Request;

class GraphController extends Controller
{
    public function index()
    {
        // Fetch the data from the database
        $data = GraphModels::orderBy('ID', 'desc')->limit(50)->get();

        // Extract the required data for the chart
        $labels = $data->pluck('tanggal')->toArray();
        $suhu = $data->pluck('suhu')->toArray();
        $kelembaban = $data->pluck('kelembaban')->toArray();

        return view('graph', compact('labels', 'suhu', 'kelembaban'));
    }
}
