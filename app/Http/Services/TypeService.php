<?php

namespace App\Http\Services;

use App\Http\Repositories\TypeRepository;

class TypeService
{
    private $typeRepository;

    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function getType()
    {
        return $this->typeRepository->getTypes();
    }
}

