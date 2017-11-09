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

    public function update($lawyer, $id)
    {
        $find = $this->get($id);
        $find->name = $lawyer['name'];
        $find->phone = $lawyer['phone'];
        $find->mail = $lawyer['mail'];
        $find->document = $lawyer['document'];
        $find->save();

        return $find;
    }

    public function delete($id)
    {
        return Lawyer::destroy($id);
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