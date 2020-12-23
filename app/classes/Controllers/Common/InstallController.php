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
        App::$db->insertRow('users', ['name' => 'Virginija', 'surname' => 'Gaidiene', 'email' => 'user@user.com', 'phone' => 867915356, 'address' => 'Kelmo g. 13A', 'password' => 'user']);
        App::$db->insertRow('users', ['name' => 'Aleksandras', 'surname' => 'Colis', 'email' => 'user2@user.com', 'phone' => 869834764, 'address' => 'Zirmunu g. 15A', 'password' => 'user2']);
        App::$db->createTable('feedback');
        App::$db->insertRow('feedback', ['user_id' => 0, 'date' => 1608710685, 'comment' => 'Blogiausias gym pasauly turbut']);
        App::$db->insertRow('feedback', ['user_id' => 1, 'date' => 1608710685, 'comment' => 'Susilauziau ranka ten su ju aparatura']);
    }
}

