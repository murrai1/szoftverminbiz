<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = "Andras";
    return view('welcome', [

        'name' => $user
    ]);
});

Route::get('/aloldal', function () {
    return view('aloldal');
});

Route::get('/arraytest', function () {

    $task = ['1. adat', '2. adat', "3. adat"];
    $asd = "valami";
    return view('arraytest') -> with(["asd" => $asd, "task" => $task]);
});


//localhost:8000/urllekeres?ertek=amilyen erteket meg akarunk adni
//http://localhost:8000/urllekeres?ertek=alma&adat=asd
Route::get('/urllekeres', function () {

    return view('urllekeres', [
        'ertek' => request('ertek'),
        'adat' =>  request('adat'),
        'alert' => '<script>alert("alert");</script>'
    ]);
});

Route::get('/post/{post}', function ($post) {

    $posts = [
        "ez-az-elso" => "Hello ez az elso oldal.",
        "ez-a-masodik"=> "Hello ez a masodik oldal."
    ];

    if(!array_key_exists($post,$posts)){
        abort(404);
    }

    return view('post',[
        'post' => $posts[$post] ?? "Nincs ilyen oldal"
    ]);
});