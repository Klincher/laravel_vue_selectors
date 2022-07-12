<?php

namespace App\Http\Services;

use App\Http\Repositories\ModelRepository;

class ModelService
{
    private $modelRepository;

    public function __construct(ModelRepository $modelRepository)
    {
        $this->modelRepository = $modelRepository;
    }

    public function getModel($selectedMark)
    {
        return $this->modelRepository->getModels($selectedMark);
    }
}
