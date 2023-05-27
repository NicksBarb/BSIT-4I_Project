<?php

namespace App\Controllers;

class Accounts extends BaseController
{
    public function index()
    {
        return view('account_settings');
    }
}
