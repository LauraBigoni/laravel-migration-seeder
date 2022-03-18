<?php

namespace App\Http\Controllers;

use App\Models\Train;

class TrainsController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        // dump($trains);

        return view('trains.index', compact('trains'));
    }
}
