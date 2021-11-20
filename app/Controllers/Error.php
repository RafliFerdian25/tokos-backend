<?php

namespace App\Controllers;

class Error extends BaseController
{
    public function index()
    {
        $data = [
            'title' => '404 - Not Found'
        ];

        return view('admin/404-page', $data);
    }
    
}
