<?php

require_once 'db.php';

class User
{
    public $name;

    public function register() {
        $userInsert = DB::getInstance()->update('users', 4, array(
            'username' => 'me'
          ));
    }

    public function login($values) {
        print_r($values);
        die();
    }
}