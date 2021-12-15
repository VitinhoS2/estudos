<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    use HasFactory;

    protected $dates = ['name_field'];

    protected $guarded = [];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
