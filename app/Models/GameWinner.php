<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameWinner extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'firstname','lastname','email', 'score', 'shoe'
    ];
}
