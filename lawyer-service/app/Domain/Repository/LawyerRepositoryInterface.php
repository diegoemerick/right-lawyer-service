<?php

namespace App\Domain\Repository;

interface LawyerRepositoryInterface
{
    /**
     * @param $lawyer
     * @return mixed
     */
    public function create($lawyer);

    /**
     * @param $lawyer
     * @param $id
     * @return mixed
     */
    public function update($lawyer, $id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @return mixed
     */
    public function index();

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);
}