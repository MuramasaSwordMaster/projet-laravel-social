<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function accueil(){
        $personne = DB::select('select * from personnes where id = :id', ['id' => 6]);
        return view('pages/accueil',['personne' => $personne[0]]);
    }

    public function compte(){
        $personne = DB::select('select * from personnes where id = :id', ['id' => 2]);
        return view('pages/compte',['personne' => $personne[0]]);
    }


    public function messages(){
        $personne = DB::select('select * from personnes where id = :id', ['id' => 6]);
        return view('pages/messages',['personne' => $personne[0]]);
    }


    public function administration(){
        $personne = DB::select('select * from personnes where id = :id', ['id' => 6]);
        return view('pages/administration',['personne' => $personne[0]]);
    }
    //
}


