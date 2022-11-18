<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Picture;
use Illuminate\Support\Facades\DB;

class PictureController extends Controller
{
    public function create()
    {
        return view("picture.create");
    }

    public function store(Request $request)
    {

        $request->validate(
            [

                'file' => 'required|mimes:png,jpg|max:2048'
            ]
            );

        $save = new Picture();

        if($request->file()) {

            $renames = time(). "-" . rand() . $request->file->getClientOriginalName();
            $picture = $request->file("file")->storeAs('kepfeltolt',$renames,'public');
            $save->picturename = $renames;
            $save->filelocation = "storage/" . $picture;
            $save->save();
        }

        return redirect("/kepekmegtekintese");

    }

    public function show()
    {

        $keplekeres = DB::table('pictures')->select('*')->get();

        return view("picture.show", compact("keplekeres"));
    }
}
