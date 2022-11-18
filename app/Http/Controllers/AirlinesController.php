<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;
use Illuminate\Support\Facades\DB;

class AirlinesController extends Controller
{
    public function postcreate()
    {

        return view("airlines.create");
    }

    public function store(Request $request)
    {

        //print_r(request("name"));

        //echo "<script> alert ('Hello') </script>";



        if (request("name") == "") {

            echo "Kötelező nevet megadni";
        }
        elseif (request("headquarters") == "") {

            echo "Kötelező központot megadni";
        }

        else {

            if(strlen(request("name")) < 4 || strlen(request("headquarters") < 4)) {

                echo "Legalább 5 karakter kell!";
            }
            else {

                $s = new Airline();
                $s->name = request('name');
                $s->headquarters = request('headquarters');
                $s->save();
                echo "Sikeres tárolás.";
            }

        }



        //Airline::create(

        //[

        //'name' => request('name'),
        //'headquarters' => request('headquarters')
        //]
        //);

    }

    public function destroy($airline)
    {

        Airline::destroy($airline);
        return redirect('legitarsasag');
    }

    public function edit($airline)
    {

        $adat = DB::table('airlines')->select('*')->where('id', '=', $airline)->first();

        return view("airlines.edit", compact('adat'));
    }

    public function update($airline)
    {

        $update = DB::table('airlines')->select('*')->where('id', '=', $airline)->update(
            [

                'name' => request('name'),
                'headquarters' => request('headquarters')
            ]
        );

        return redirect("legitarsasag");
    }

    public function index()
    {

        $adat = DB::table('airlines')->select('*')->get();
        //dd ($s);

        return view("airlines.index", compact('adat'));
    }

    public function show($re)
    {

        $adat = DB::table('flights')->select('*')->where('airlineid', '=', $re)->get();
        return view('airlines.show', compact('adat'));
    }
}
