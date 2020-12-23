<?php


namespace App\Views\Tables\Common;

use App\Views\Table;

class FeedbackTable extends Table
{
    public function __construct($feedback = [])
    {
        parent::__construct([
            'headers' => [
                'Name',
                'Date',
                'Comment',
            ],
            'rows' => $feedback
        ]);
    }
}