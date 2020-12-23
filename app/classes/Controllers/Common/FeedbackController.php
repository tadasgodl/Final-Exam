<?php


namespace App\Controllers\Common;


use App\App;
use App\Controllers\Base\GuestController;
use App\Views\BasePage;
use App\Views\Forms\Common\FeedbackCreateForm;
use App\Views\Tables\Common\FeedbackTable;
use Core\View;

class FeedbackController extends GuestController
{
    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'Feedback',
            'js' => ['/media/js/common/feedback.js'],
        ]);
    }

    public function index() {

        $table = new FeedbackTable();
        $user = App::$session->getUser();


        if ($user) {
            $forms = [
                'create' => (new FeedbackCreateForm())->render()
            ];
        }

        $content = (new View([
            'title' => 'Write us about your experience here!',
            'forms' => $forms ?? [],
            'table' => $table->render(),
        ]))->render(ROOT . '/app/templates/content/feedback.tpl.php');

        $this->page->setContent($content);

        return $this->page->render();
    }
}