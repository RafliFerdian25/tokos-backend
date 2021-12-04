<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        if (in_groups('admin')) {
            return redirect()->to('Admin/index');
        } else {
            return redirect()->to('Customer/index');
        }
    }
}