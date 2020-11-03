<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Ricode Apps'
        ];
        return view('pages/landing', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Ricode'
        ];
        return view('pages/about', $data);
    }

    //--------------------------------------------------------------------

}