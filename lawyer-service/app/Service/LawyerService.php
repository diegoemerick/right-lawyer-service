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

    public function index()
    {
        $this->repository->index();
    }
}