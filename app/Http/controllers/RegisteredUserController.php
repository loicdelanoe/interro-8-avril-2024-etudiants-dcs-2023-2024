<?php

namespace App\Http\controllers;

use App\models\User;
use Core\Exceptions\FileNotFoundException;
use Core\Response;
use Core\Validator;

class RegisteredUserController
{

    private User $user;

    public function __construct()
    {
        try {
            $this->user = new User(base_path('.env.local.ini'));
        } catch (FileNotFoundException $exception) {
            die($exception->getMessage());
        }
    }

    public function create()
    {
        view('users.create');
    }

    public function store()
    {

        $data = Validator::check([
            'email' => 'required|email',
            'password' => 'required|min:10|max:100',
        ]);

        $data = [
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        ];

        if ($this->user->create($data)) {
            Response::redirect('/jiris');
        } else {
            Response::abort(Response::SERVER_ERROR);
        }
    }
}