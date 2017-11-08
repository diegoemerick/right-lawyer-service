<?php

namespace App\Service;

use App\Infrasctructure\Repository\LawyerRepository;

class LawyerService
{
    private $repository;

    public function __construct(LawyerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($lawyer)
    {
        try {
            return $this->repository->create($lawyer);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function index()
    {
        try {
            return $this->repository->index();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function get($id)
    {
        try {
            return $this->repository->get($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}