<?php

namespace App\Infrasctructure\Repository;

use App\Model\Lawyer;

class LawyerRepository
{
    /**
     * @param $lawyer
     * @return mixed
     */
    public function create($lawyer)
    {
        return Lawyer::create($lawyer);
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return Lawyer::orderBy('id', 'desc')->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return Lawyer::find($id);
    }
}