<?php

namespace App\Http\Controllers;

use App\Service\LawyerService;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    private $lawyerService;

    public function __construct(LawyerService $lawyerService)
    {
        $this->lawyerService = $lawyerService;
    }

    public function create(Request $request)
    {
        if ($request->get('form')) {
            $lawyer = $this->lawyerService->create($request->get('form'));
            return $lawyer;
        }
        return null;
    }

    public function update(Request $request, $id)
    {
        return $this->lawyerService->update($request->get('form'), $id);
    }

    public function delete($id)
    {
        return $this->lawyerService->delete($id);
    }

    public function get($id)
    {
        return $this->lawyerService->get($id);
    }

    public function index()
    {
        return $this->lawyerService->index();
    }
}
