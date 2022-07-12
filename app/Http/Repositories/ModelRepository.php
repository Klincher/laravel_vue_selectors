<?php

namespace App\Http\Repositories;

use App\Models\Model;

class ModelRepository
{
    public $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getModels($selectedMark)
    {
        return $this->model->where('mark_id', $selectedMark)->get();
    }
}
