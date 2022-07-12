<?php

namespace App\Http\Controllers;

use App\Http\Services\MarkService;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    protected $markService;

    public function __construct(MarkService $markService)
    {
        $this->markService = $markService;
    }

    public function index(Request $request)
    {
        return response()->json($this->markService->getMark($request->input('typeId')), 200);
    }
}
