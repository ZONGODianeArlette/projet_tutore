<?php

namespace App\Http\Controllers\private\user;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class SelectLessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        return view('private.user.selectLesson.index', compact('lessons'));
    }

    public function selectionAction(Request $request)
    {
        $lessonsSelected = $request->input('lessons');
        // dd($lessonsSelected);

        // Faites ce que vous voulez avec les leçons sélectionnées, par exemple :
        foreach ($lessonsSelected as $lessonId) {
            dd($lessonId);
            $lesson = Lesson::find($lessonId);
            $lessons[] = $lesson;
        }


    }
}
