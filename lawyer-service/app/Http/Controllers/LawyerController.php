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

    }

    public function save(Request $request)
    {

    }

    public function index()
    {
        $this->lawyerService->index();
    }
}
