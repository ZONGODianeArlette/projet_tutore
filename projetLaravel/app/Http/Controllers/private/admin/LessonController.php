<?php

namespace App\Http\Controllers\private\admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::orderBy('created_at', 'asc')->get();
        return view('private.admin.lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.admin.lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required|min:6|unique:lessons',
            ],
            [
                'nom.required' => 'Le champ nom est requis.',
                'nom.min' => 'Le nom de la lesson doit contenir au moins :min caractères.',
                'nom.unique' => 'Ce nom est déjà utilisée.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $lesson = Lesson::create([
            "nom" => $request->nom
        ]);

        return redirect()->route('lessons.index')->with('success', 'Lesson creé avec succès !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lesson = Lesson::find($id);

        return view('private.admin.lesson.show', ["lesson" => $lesson]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lesson = Lesson::find($id);
        
        if(!$lesson)
        {
            return redirect()->back()->with('error', "Echec d'edition de la lesson !");
        }

        return view('private.admin.lesson.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updated(Request $request, string $id)
    {
            $validator = Validator::make(
                $request->all(),
                [
                    'nom' => 'required|min:6|unique:lessons',
                ],
                [
                    'nom.required' => 'Le champ nom est requis.',
                    'nom.min' => 'Le nom de la lesson doit contenir au moins :min caractères.',
                    'nom.unique' => 'Ce nom est déjà utilisée.',
                ]
            );
    
            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
            }
           
            $lesson = Lesson::find($id);

            if(!$lesson)
            {
                return redirect()->back()->with('error', 'Echec de la modification de la lesson !');
            }


            $lesson->nom = $request->nom;
            $lesson->save();

            return redirect()->route('lessons.index')->with('success', 'Lesson modifiée avec succès !');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lesson = Lesson::find($id);
        
        if(!$lesson)
        {
            return redirect()->back()->with('error', 'Echec de la suppression de la lesson !');
        }

        $lesson->destroy();
        return redirect()->back()->with('success', 'Lesson supprimer avec succès !');

    }
}
