<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => ' - 首页'
        ];
        return view('public/head', $data)
            . view('index')
            . view('public/footer');
    }
}
