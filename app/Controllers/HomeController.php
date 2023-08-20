<?php

namespace app\Controllers;


use core\View\View;

class HomeController extends Controller {
    /**
     * @throws \Exception
     */
    public function index(): void
    {
        $view = new View();

        $content = 'Content';

        $data = [
            'title' => 'Home',
            'content' => $content,
        ];

        echo $view->render('index', $data);
    }

    /**
     * @throws \Exception
     */
    public function contact(): void
    {
        $view = new View();

        $content = 'Content';

        $data = [
            'title' => 'Contact',
            'content' => $content,
        ];

        echo $view->render('contact', $data);
    }

}