<?php

namespace App\Http\Controllers\private\user;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;

class MesLessonController extends Controller
{
    public function index()
    {
        $lessons = Lesson::all();
        return view('private.user.mesLessons.index', compact('lessons'));
    }
}
