<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motmoorepluriel extends Model
{
    use HasFactory;

    protected $fillable = [
        'mot',
        'image',
        'description',
        'exemple',
    ];
}
