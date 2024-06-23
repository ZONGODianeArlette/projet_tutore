<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Motmoore;
use App\Models\Motmooresingulier;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        return view("public.index");
       }
       public function mes_mots(Request $request)
       {
           $query = MotMooreSingulier::query();
       
           // Si une recherche est effectuée, filtrer les résultats
           if ($request->filled('nom')) {
               $searchTerm = $request->input('nom');
               $query->where('mot_en_fr', 'like', '%' . $searchTerm . '%')
                     ->orWhere('mot_en_moore', 'like', '%' . $searchTerm . '%');
           }
       
           $motmooresinguliers = $query->paginate(5); // Paginate with 5 items per page
       
           return view("public.listmot", [
               "motmooresinguliers" => $motmooresinguliers
           ]);
       }
       
}
