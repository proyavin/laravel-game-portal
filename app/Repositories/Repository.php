<?php

namespace App\Repositories;

abstract class Repository {

    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    protected function startCond() {
        return clone $this->model;
    }

}