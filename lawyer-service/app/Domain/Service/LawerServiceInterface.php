<?php

namespace App\Domain\Service;

interface LawerServiceInterface
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
     * @return mixed
     */
    public function index();

    /**
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}