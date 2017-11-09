<?php

namespace App\Service;

use App\Domain\Service\LawerServiceInterface;
use App\Infrasctructure\Repository\LawyerRepository;
use App\Model\Lawyer;
use Validator;

class LawyerService implements LawerServiceInterface
{
    private $repository;

    /**
     * LawyerService constructor.
     * @param LawyerRepository $repository
     */
    public function __construct(LawyerRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create($lawyer)
    {
        try {

            $valid = Validator::make(
                $lawyer,
                Lawyer::RULES);

            if ($valid->fails()) {
                throw new \Exception($valid->errors());
            }
            return $this->repository->create($lawyer);

        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function update($lawyer, $id)
    {
        try {
            return $this->repository->update($lawyer, $id);
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

    public function delete($id)
    {
        try {
            return $this->repository->delete($id);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}