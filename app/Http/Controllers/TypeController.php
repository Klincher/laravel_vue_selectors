<?php

namespace App\Http\Controllers;

use App\Http\Services\TypeService;

class TypeController extends Controller
{
    protected $typeService;

    public function __construct(TypeService $typeService)
    {
        $this->typeService = $typeService;
    }

    public function index()
    {
        return response()->json($this->typeService->getType(), 200);
    }
}
