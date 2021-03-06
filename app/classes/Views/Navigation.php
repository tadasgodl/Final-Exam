<?php

namespace App\Views;

use App\App;
use Core\View;

class Navigation extends View
{

    public function __construct()
    {
        parent::__construct($this->generate());
    }

    public function generate()
    {
        $nav = [App::$router::getUrl('index') => 'Home'];

        if (App::$session->getUser()) {
            return $nav + [
                    App::$router::getUrl('feedback') => 'Feedback',
                    App::$router::getUrl('logout') => 'Logout',
                ];
        } else {
            return $nav + [
                    App::$router::getUrl('feedback') => 'Feedback',
                    App::$router::getUrl('register') => 'Register',
                    App::$router::getUrl('login') => 'Login',
                ];
        }
    }

    public
    function render($template_path = ROOT . '/app/templates/nav.php')
    {
        return parent::render($template_path); // TODO: Change the autogenerated stub
    }
}


