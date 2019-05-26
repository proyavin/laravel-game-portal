<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Achievements\AddedFiveGames;
use Illuminate\Support\Facades\Auth;

class PagesController extends BaseController
{
    // Создать котроллер который отвечает за создание статистических страниц, и выводит MarkDown

    public function __construct()
    {
        parent::__construct();
    }

    public function getIndexPage() {

      $user = Auth::user();

      $user->unlock(new AddedFiveGames());

        return view('site.index');
    }
}
