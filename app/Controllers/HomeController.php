<?php

namespace app\Controllers;



class HomeController extends Controller {
    public function index()
    {
        $title = 'Home Page';
        $data = [$title => 'title'];

        return view('index', $data);
    }

}