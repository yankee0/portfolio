<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Web extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
}
