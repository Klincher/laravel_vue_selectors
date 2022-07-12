<?php

namespace App\Http\Services;

use App\Http\Repositories\MarkRepository;

class MarkService
{
    private $markRepository;

    public function __construct(MarkRepository $markRepository)
    {
        $this->markRepository = $markRepository;
    }

    public function getMark($selectedType)
    {
        return $this->markRepository->getMarks($selectedType);
    }
}
