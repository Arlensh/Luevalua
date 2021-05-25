<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centro extends Model
{
    const UPDATED_AT = null;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'url';
    }
    public function scopeName($query, $name)
    {
        // if (trim($name) != "") {
        //     $query->where("denominacion_especifica", 'like', "%" . $name . "%")->take(10)->get();
        // }
        $query->where("denominacion_especifica", 'like', "%" . $name . "%")->get();
    }
    use HasFactory;
}
