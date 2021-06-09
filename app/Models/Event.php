<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    protected $table= 'evento';

    protected $fillable = [
        'titulo', 'descripcion', 'fecha', 'tipo', 'centro',
    ];

    public $timestamps = false;
}
