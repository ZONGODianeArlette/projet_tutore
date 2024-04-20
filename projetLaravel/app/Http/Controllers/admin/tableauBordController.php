<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tableauBordController extends Controller
{
    public function index() {
        return view("admin.index");
    }

    public function mot() {
        return view("admin.liste_mot");
    }
    public function utilisateur() {
        return view("admin.liste_utilisateur");
    }
}

