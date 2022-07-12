<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\ModelService;

class ModelController extends Controller
{
    protected $modelService;

    public function __construct(ModelService $modelService)
    {
        $this->modelService = $modelService;
    }

    public function index(Request $request)
    {
        return response()->json($this->modelService->getModel($request->input('markId')), 200);
    }
}
