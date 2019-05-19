<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class ProfileController extends Controller
{
    public function getProfilePage($id, UserRepository $user) {

        $user = $user->getById($id);

        return view('auth.user.profile', ['user' => $user]);
    }
}
