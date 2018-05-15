<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function accueil(){
        $prenom = 'sebastien';
        $nom = 'Pasco';
        return view('pages/accueil',compact('prenom','nom'));
    }

    public function compte(){
        $prenom = 'sebastien';
        $nom = 'Pasco';
        return view('pages/compte',compact('prenom','nom'));
    }


    public function messages(){
        $prenom = 'sebastien';
        $nom = 'Pasco';
        return view('pages/messages',compact('prenom','nom'));
    }


    public function administration(){
        $prenom = 'sebastien';
        $nom = 'Pasco';
        return view('pages/administration',compact('prenom','nom'));
    }
    //
}


