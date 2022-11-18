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

/*Route::get('/post/{post}', function ($post) {

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
});*/

//Route::get("/posts/{post}", [App\Http\Controllers\PostController::class, "show"]);

//Route::get("/{nev}", [App\Http\Controllers\sajatadatController::class, "show"]);

Route::get("/flight/{flight}", [App\Http\Controllers\FlightsController::class, "show"]);

Route::get("/utasok/create", [App\Http\Controllers\PassengerController::class, "create"]);

Route::get("/utasok/{utas}", [App\Http\Controllers\PassengerController::class, "show"]);
Route::post("/utasok", [App\Http\Controllers\PassengerController::class, "store"]);



Route::get("/legitarsasag", [App\Http\Controllers\AirlinesController::class, "index"]);
Route::get("/legitarsasag/create", [App\Http\Controllers\AirlinesController::class, "postcreate"]);
Route::delete("/legitarsasag/{legi}", [App\Http\Controllers\AirlinesController::class, "destroy"]);
Route::get("/legitarsasag/{legi}/edit", [App\Http\Controllers\AirlinesController::class, "edit"]);
Route::put("/legitarsasag/{legi}", [App\Http\Controllers\AirlinesController::class, "update"]);
Route::get("/legitarsasag/{legi}", [App\Http\Controllers\AirlinesController::class, "show"]);
Route::post("/legitarsasag/mentes", [App\Http\Controllers\AirlinesController::class, "store"])->name("legitarsasagmentese");




Route::get("/varos/create", [App\Http\Controllers\CitiesController::class, "postcreate"]);
Route::post("/varos", [App\Http\Controllers\CitiesController::class, "store"]);



Route::get("/kepfeltoltes", [App\Http\Controllers\PictureController::class, "create"]);
Route::get("/kepekmegtekintese", [App\Http\Controllers\PictureController::class, "show"]);
Route::post("/kepekmegtekintese", [App\Http\Controllers\PictureController::class, "store"])->name("kepmentes");
