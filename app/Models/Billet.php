<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billet extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'movie',
        'number',
        'image',
        'user_id',
    ];

    // public function users()
    // {
    //     return $this->belongsTo("App\Models\User", "user_id");
    // }
}
