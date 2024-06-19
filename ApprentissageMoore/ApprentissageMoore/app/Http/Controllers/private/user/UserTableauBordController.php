<?php

namespace App\Http\Controllers\private\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserTableauBordController extends Controller
{
   public function index(){

       // Récupérer l'utilisateur actuel
    $user = auth()->user();

    // Calculer le total des leçons en cours
    $total_lessons_en_cours = $user->lessons()->where('status', 'en_cours')->count();

    // Calculer le total des leçons terminées
    $total_lessons_reussies = $user->lessons()->where('status', 'valider')->count(); // Assuming 'valider' means 'terminées'

    // Récupérer le total des points de l'utilisateur
    $total_points = $user->point;

    return view('private.user.index', compact(
      'total_lessons_en_cours',
      'total_lessons_reussies',
      'total_points'
  ));
   }
}
