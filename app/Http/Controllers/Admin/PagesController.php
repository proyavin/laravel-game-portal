<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getDashboardPage() {
        return view('admin.dashboard');
    }
}
