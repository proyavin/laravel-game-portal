<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

use App\Achievements\AddedFiveGames;

class ProfileController extends Controller
{
    public function getProfilePage($id, UserRepository $user) {

        $user = $user->getById($id);

        return view('auth.user.profile', ['user' => $user, 'achivs' => $user->achievementStatus(new AddedFiveGames())]);
    }
}
