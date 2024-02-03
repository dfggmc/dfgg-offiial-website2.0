<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function history()
    {
        $data = [
            'title' => ' - 服务器历史'
        ];
        return view('public/head', $data)
            . view('page/history')
            . view('public/footer');
    }
    public function ListOfSponsors()
    {
        $data = [
            'title' => ' - 赞助名单'
        ];
        return view('public/head', $data)
            . \view('page/ListOfSponsors')
            . \view('public/footer');
    }
}
