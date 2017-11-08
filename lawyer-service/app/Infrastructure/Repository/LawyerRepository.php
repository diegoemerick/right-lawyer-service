<?php

namespace App\Infrasctructure\Repository;

use App\Model\Lawyer;

class LawyerRepository
{
    public function index()
    {
        return Lawyer::orderBy('id', 'desc')->get();
    }
}