<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pokemon extends Model
{
    protected $fillable = [
        'pokemon',
        'tid1',
        'tid2',
        'ability',
    ];
}
