<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Votante extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getEdadAttribute($value)
    {
        //$edad = Str::limit($value,2);
        $edad = substr(strip_tags($value),0,2);
        return $edad;
    }


}
