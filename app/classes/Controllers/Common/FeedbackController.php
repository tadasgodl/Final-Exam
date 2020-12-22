<?php


namespace App\Controllers\Common;


use App\App;
use App\Views\BasePage;
use Core\View;

class FeedbackController
{
    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'Feedback',
            'js' => ['/media/js/common/feedback.js']
        ]);
    }

    public function index() {

        $user = App::$session->getUser();

        if ($user) {
            $forms = [
                'create' => (new FeedbackCreateForm())->render()
            ];
        }

        $content = (new View([
            'title' => 'Write you about you experience with us!',
            'forms' => $forms ?? []
        ]))->render(ROOT . '/app/templates/content/feedback.tpl.php');

        $this->page->setContent($content);

        return $this->page->render();
    }
}