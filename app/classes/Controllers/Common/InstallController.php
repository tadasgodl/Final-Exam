<?php

namespace App\Controllers\Common;

use App\App;
use Core\FileDB;

class InstallController
{
    public function install()
    {
        App::$db = new FileDB(DB_FILE);

        App::$db->createTable('users');
        App::$db->insertRow('users', ['name' => 'Jotvydas', 'surname' => 'Gaidys', 'email' => 'user@user.com', 'phone' => 867915356, 'address' => 'Kelmo g. 13A', 'password' => 'user']);
        App::$db->createTable('feedback');
    }
}

