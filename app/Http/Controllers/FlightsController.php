<?php

namespace App\Http\Controllers;
use App\Models\Flight;

use Illuminate\Http\Request;

class FlightsController extends Controller
{
    public function show($id) {

        $flight = Flight::findOrFail($id);
        return view('flights.show', ['flight' => $flight]);
    }

}
