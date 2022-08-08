<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function fun()
    {
        $age="12";
        $prenom="Ange Cyrille";
        $nom="Chéba";
        return view('test',compact("age","nom","prenom"));
    }

    
}
