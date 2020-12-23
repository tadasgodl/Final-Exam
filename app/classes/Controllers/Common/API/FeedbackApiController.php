<?php


namespace App\Controllers\Common\API;


use App\App;
use App\Views\Forms\Common\FeedbackCreateForm;
use Core\Api\Response;

class FeedbackApiController
{
    public function index(): string
    {

        $response = new Response();
        $feedback = App::$db->getRowsWhere('feedback');

        foreach ($feedback as $id => &$comment) {
            $user = App::$db->getRowById('users', $comment['user_id']);

            $comment = [
                'id' => $id,
                'name' => $user['name'] . ' ' . $user['surname'],
                'date' => date("Y-m-d", time()),
                'comment' => $comment['comment'],
            ];
        }

        $response->setData($feedback);

        // Returns json-encoded response
        return $response->toJson();
    }


    public function create(): string
    {
        // This is a helper class to make sure
        // we use the same API json response structure
        $response = new Response();
        $form = new FeedbackCreateForm();

        if ($form->validate()) {
            $comment['name'] = App::$session->getUser()['name'] . ' ' . App::$session->getUser()['surname'];
            $comment['date'] = date("Y-m-d", time());
            $comment['comment'] = $form->value('text');

            $comment['id'] = App::$db->insertRow('feedback', [
                'user_id' => App::$db->getRowIdWhere('users', ['email' => App::$session->getUser()['email']]),
                'date' => time(),
                'comment' => $comment['comment'],
            ]);

            $response->setData($comment);

        } else {

            $response->setErrors($form->getErrors());
        }

        // Returns json-encoded response
        return $response->toJson();
    }
}