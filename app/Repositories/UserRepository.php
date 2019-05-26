<?php

namespace App\Repositories;

use App\User as Model;

class UserRepository extends Repository {

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginator($count) {
        return $this->startCond()
            ->select(['id', 'name', 'email', 'created_at', 'updated_at'])
            ->orderBy('id')
            ->paginate($count);
    }

    public function getById($id) {
        return $this->startCond()
            ->find($id);
    }

}