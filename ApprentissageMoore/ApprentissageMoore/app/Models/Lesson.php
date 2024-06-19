<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'point',
        'totalMotMoore',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('status');
    }

    public function motMoores()
    {
        return $this->hasMany(MotMoore::class);
    }

    public function areAllMotMooresValidated()
    {
        return $this->motMoores()->where('status', '!=', 'valider')->count() === 0;
    }

}
