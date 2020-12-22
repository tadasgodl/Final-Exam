<?php


namespace App\Views;


use Core\View;

class Footer extends View
{

    public function __construct()
    {
        parent::__construct($this->generate());
    }

    public function generate()
    {
        return '© 2020. Tadas Godliauskas, all rights reserved.';
    }

    public
    function render($template_path = ROOT . '/app/templates/footer.php')
    {
        return parent::render($template_path);
    }
}