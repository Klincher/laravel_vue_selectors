<?php

namespace App\Http\Repositories;

use App\Models\Type;

class TypeRepository
{
    public $model;

    public function __construct(Type $type)
    {
        $this->model = $type;
    }

    public function getTypes()
    {
        return $this->model->all();
    }
}
