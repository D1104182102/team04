<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $fillable = [
    'types',
    'super_effective1' ,
    'super_effective2' ,
    'super_effective3' ,
    'super_effective4' ,
    'super_effective5' ,
    'not_very_effective1' ,
    'not_very_effective2' ,
    'not_very_effective3' ,
    'not_very_effective4' ,
    'not_very_effective5' ,
    'not_very_effective6' ,
    'not_very_effective7' ,
    'not_effective',
    'created_at',
    'updated_at',
    ];
}

