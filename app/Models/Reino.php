<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reino extends Model
{
    use HasFactory;

    protected $table = 'reinos';

    protected $fillable = [
        'nome',
    ];

}
