<?php

class Home extends Controller
{
    public function index($name ='')
    {
        $user = $this->model('User');
        $user->name = $name;
        
        $this->view('dashboard/index', ['name' => $user->name]);
    }

    public function register()
    {
        return json_encode(array('message' => 'Hello there bro'));
    }

    public function login() {
        $user = $this->model('User');
        $user->login($_POST);
    }
}