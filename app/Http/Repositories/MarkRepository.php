<?php

namespace App\Http\Repositories;

use App\Models\Mark;

class MarkRepository
{
    public $model;

    public function __construct(Mark $mark)
    {
        $this->model = $mark;
    }

    public function getMarks($selectedType)
    {
        return $this->model->where('type_id', $selectedType)->get();
    }
}
