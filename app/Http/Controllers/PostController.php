<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($nev) {

       // return view("post", compact('post'));

       $post = DB::table('sajat_adatok')->where('nev', $nev)-> first();
       //dd ($s);

       return view("andras", compact('post'));
    }
}
