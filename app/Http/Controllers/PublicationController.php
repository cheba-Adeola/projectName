<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;



class PublicationController extends Controller
{
    public function create()
    {
        return view('/Publications/create'); 
    }

    public function store(Request $request)
    {
        $validate= Validator::make($request->all(), [
            'titre' => ['required', 'string', 'max:255'],
            'contenu' => ['required', 'string'],
            
        ]);
        if ($validate) {
            $publication=Publication::create([
                'titre' => $request["titre"],
                'contenu' =>$request["contenu"],
                'user_id' =>Auth::user()->id,
            ]);
            return view('/Publications/show',compact('publication'));
        }
    }
}
