<?php

namespace App\Http\Controllers\private\user;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Motmoore;
use Illuminate\Http\Request;

class MesLessonController extends Controller
{
    public function index(Request $request)
    {
        // Récupérer l'utilisateur actuel
        $user = auth()->user();

        // Récupérer les leçons en cours
        $lessons_en_attentes_query = $user->lessons()->wherePivot('status', 'en_cours');

        // Appliquer la recherche si nécessaire
        if ($recherche = $request->recherche_lessons_user_apprentissage) {
            $lessons_en_attentes_query->where('nom', 'like', '%' . $recherche . '%');
        }

        // Paginer les leçons en attente
        $lessons_en_attentes = $lessons_en_attentes_query->paginate(5);

        // Récupérer les leçons validées
        $lessons_en_valider_query = $user->lessons()->wherePivot('status', 'valider');

        // Appliquer la recherche si nécessaire
        if ($recherche) {
            $lessons_en_valider_query->where('nom', 'like', '%' . $recherche . '%');
        }

        // Paginer les leçons validées
        $lessons_en_valider = $lessons_en_valider_query->paginate(5, ['*'], 'valider_page');

        // Calculer le total des leçons en cours et validées
        $total_lessons_en_cours = $lessons_en_attentes_query->count();
        $total_lessons_validees = $lessons_en_valider_query->count();

        // Calculer le total des points de l'utilisateur
        $total_points = $user->point;

        return view('private.user.mesLessons.index', compact('lessons_en_attentes', 'lessons_en_valider', 'total_lessons_en_cours', 'total_lessons_validees', 'total_points'));
    }



    public function deselectionAction($idLesson)
    {
        // Récupérer l'utilisateur actuel
        $user = auth()->user(); // Si vous utilisez l'authentification Laravel

        // Trouver la leçon
        $lesson = Lesson::find($idLesson);

        // Vérifier si la leçon existe et si l'utilisateur est attaché à cette leçon
        if ($lesson && $user->lessons->contains($lesson)) {
            // Détacher l'utilisateur de la leçon
            $user->lessons()->detach($lesson);

            // Pas besoin d'appeler $user->save() car la méthode detach() gère automatiquement la mise à jour de la relation

            return redirect()->back()->with('success', "La leçon a été retirée avec succès. Retrouvez-la dans la section 'Sélectionner des leçons'.");
        } else {
            return redirect()->back()->with('error', "La leçon n'est pas attachée à cet utilisateur.");
        }
    }

    public function apprentissageLesson($idLesson)
    {
        $user = auth()->user();
    
        // Récupérer la leçon sélectionnée par l'utilisateur
        $lesson = $user->lessons()->where('lessons.id', $idLesson)->first();
    
        if (!$lesson) {
            return redirect()->back()->with('error', 'Leçon non trouvée.');
        }
    
        return view('private.user.mesLessons.apprentissageLesson', [
            "lesson" => $lesson
        ]);
    }
    

    // public function submitAnswer(Request $request, $motMooreId)
    // {
    //     $user = auth()->user();
    //     $motMoore = Motmoore::find($motMooreId);
        
    //     if (!$motMoore) {
    //         return redirect()->back()->with('error', 'Mot Moore non trouvé.');
    //     }
        
    //     // Vérifier la réponse
    //     $answer = $request->input('pluriel');
    //     $correctAnswer = $motMoore->pluriel->mot_en_moore;
    //     if ($answer === $correctAnswer) {
    //         // Marquer comme terminé, ajouter des points et désactiver
    //         $motMoore->status = "valider";
    //         $user->point += $motMoore->points;

    //         $motMoore->save();
    //         $user->save();

    //         // Vérifier si tous les mots de la leçon sont validés
    //         $lesson = $motMoore->lesson;
    //         if ($lesson->areAllMotMooresValidated()) {
    //             $lesson->status = "valider";
    //             $lesson->save();
    //         }

    //         return redirect()->back()->with('success', 'Bonne réponse ! Vous avez gagné de 5 points de plus.');
    //     } else {
    //         return redirect()->back()->with('error', 'Mauvaise réponse. Essayez encore.');
    //     }
    // }

    public function submitAnswer(Request $request, $motMooreId)
    {
        $user = auth()->user();
        $motMoore = Motmoore::find($motMooreId);
        
        if (!$motMoore) {
            return redirect()->back()->with('error', 'Mot Moore non trouvé.');
        }
        
        // Vérifier la réponse
        $answer = $request->input('pluriel');
        $correctAnswer = $motMoore->pluriel->mot_en_moore;
        $lesson = $motMoore->lesson;
    
        if ($answer === $correctAnswer) {
            // Mettre à jour le statut du mot Moore pour l'utilisateur dans la table pivot
            $user->lessons()->updateExistingPivot($lesson->id, ['status' => 'valider']);
            
            // Attacher l'utilisateur au mot Moore avec le statut 'valider'
            $user->motMoores()->attach($motMooreId, ['status' => 'valider']);
    
            // Ajouter les points à l'utilisateur
            $user->point += $motMoore->points;
            $user->save();
    
            // Vérifier si tous les mots de la leçon sont validés pour cet utilisateur
            $allMotMooresValidated = $lesson->motMoores()
                ->whereHas('users', function ($query) use ($user) {
                    $query->where('user_id', $user->id)
                          ->where('status', '!=', 'valider');
                })
                ->count() === 0;
    
            if ($allMotMooresValidated) {
                // Mettre à jour le statut de la leçon pour l'utilisateur dans la table pivot
                $user->lessons()->updateExistingPivot($lesson->id, ['status' => 'valider']);
            }
    
            return redirect()->back()->with('success', 'Bonne réponse ! Vous avez gagné 5 points de plus.');
        } else {
            return redirect()->back()->with('error', 'Mauvaise réponse. Essayez encore.');
        }
    }
    
    

}
