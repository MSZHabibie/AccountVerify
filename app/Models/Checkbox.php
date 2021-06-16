<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkbox extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'checkbox'
    ];
}
