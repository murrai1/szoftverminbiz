<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sajatadatController extends Controller
{
    public function show($nev) {

        $post = DB::table('andras')->where('nev', $nev)-> first();
        //dd ($s);
 
        return view("sajatadatok", compact('post'));
    }
}
