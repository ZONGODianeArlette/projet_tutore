<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class utilisateurController extends Controller
{
    public function utilisateur(){
        return view("utilisateur.index2");
       }
}
