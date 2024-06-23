<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotMooreUser extends Model
{
    use HasFactory;

    protected $table = 'motmoore_user';

    protected $fillable = [
        'user_id',
        'motmoore_id',
        'status',
    ];

    public function motMoore()
    {
        return $this->belongsTo(MotMoore::class, 'motmoore_id');
    }
}
