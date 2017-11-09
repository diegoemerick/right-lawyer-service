<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lawyer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'phone',
        'mail',
        'document'
    ];

    protected $dates = ['deleted_at'];

    const RULES = [
        'name'=>'required|max:255',
        'phone'=>'required',
        'mail'=>'required',
        'document' => 'required|unique:lawyers|max:255',
    ];
}
