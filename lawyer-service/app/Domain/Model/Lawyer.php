<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    protected $fillable = ['id', 'name', 'phone', 'email', 'document'];

    public static $rules = [
        'name'=>'required|max:255',
        'phone'=>'required',
        'mail'=>'required',
        'cpf' => 'required|unique|max:255',
    ];

}
