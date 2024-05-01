<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motmooresingulier extends Model
{
    use HasFactory;

    protected $fillable = [
        'mot_en_fr',
        'mot_en_moore',
        'suffixe',
        'image',
        'description',
        'exemple',
    ];
}
