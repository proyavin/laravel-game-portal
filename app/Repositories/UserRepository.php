<?php

namespace App\Repositories;

use App\User;

class UserRepository extends Repository {

    public function getById($id) {
        return User::find($id);
    }

}