<?php
namespace App\Http\Controllers\private\user;
use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Récupérer l'utilisateur actuel
        $user = auth()->user();

        // Récupérer les leçons terminées (status "valider")
        $lessons_completed_query = $user->lessons()->wherePivot('status', 'valider');

        // Appliquer la recherche si nécessaire
        if ($recherche = $request->recherche_lessons_user_apprentissage) {
            $lessons_completed_query->where('nom', 'like', '%' . $recherche . '%');
        }

        // Calculer le total des leçons réussies
        $total_lessons_reussies = $user->lessons()->wherePivot('status', 'valider')->count();

        // Calculer le total des points
        $total_points = $user->lessons()->wherePivot('status', 'valider')->sum('points');

        // Paginer les leçons terminées
        $lessons = $lessons_completed_query->paginate(20);

        return view('private.user.scores.index', compact('lessons', 'total_points', 'total_lessons_reussies'));
    }
}
