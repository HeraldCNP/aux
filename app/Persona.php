<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'address',
        'face',
        'idUser'];

    public function user(){
        return $this->hasOne('App\User','id');
    }

}
