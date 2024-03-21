<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class versiculo extends Model
{
    use HasFactory;

    protected $fillable = ['capitulo', 'versiculo', 'texto', 'livro_id'];
}
