<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Support\Carbon;


class TrainController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        $trains = Train::whereDate('departure_time', $now)->get();
        return view('home', compact('trains'));
    }
}