<?php

namespace App\Http\Controllers;

use App\Models\DataGraph;
use Illuminate\Http\Request;

class DataGraphController extends Controller
{
    public function index()
    {
        $data = DataGraph::all();

        return view('datagraph', compact('data'));
    }
}
