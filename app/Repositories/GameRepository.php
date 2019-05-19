<?php

namespace App\Repositories;

use App\Game as Model;

class GameRepository extends Repository {

    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginator($count) {
        return $this->startCond()
            ->select(['id', 'name', 'description', 'publisher_id', 'poster', 'year', 'created_at', 'updated_at'])
            ->orderBy('id')
            ->paginate($count);
    }

}