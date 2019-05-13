<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends BaseController
{
    // Создать котроллер который отвечает за создание статистических страниц, и выводит MarkDown

    public function __construct()
    {
        parent::__construct();
    }

    public function getIndexPage() {
        return view('site.index');
    }
}
