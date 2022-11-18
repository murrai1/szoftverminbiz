<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CitiesController extends Controller
{
    public function postcreate() {

        return view("cities.create");
    }

    public function store(Request $request) {

       $s = new City();
       $s->name = request('name');
       $s->save();

       return view("welcome");
}

}
