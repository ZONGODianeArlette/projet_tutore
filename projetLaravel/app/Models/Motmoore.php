<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motmoore extends Model
{
    use HasFactory;

        protected $fillable = [
        'lesson_id',
        'motmooresingulier_id',
        'motmoorepluriel_id',
    ];
}
