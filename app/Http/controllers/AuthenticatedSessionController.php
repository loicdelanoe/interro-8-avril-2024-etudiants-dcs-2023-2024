<?php

namespace App\Http\controllers;

use App\models\User;
use Core\Exceptions\FileNotFoundException;
use Core\Response;
use Core\Validator;

class AuthenticatedSessionController
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
        view('users.login');
    }

    public function store()
    {
        $data = Validator::check([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Récupère l'utilisateur avec la même email
        $user = $this->user->findUserOrFail($data['email']);

        // Vérifie si le password match avec le hash
        if (password_verify($data['password'], $user->password)) {
            session_abort();

            session_start();

            foreach ($user as $k => $v) {
                $_SESSION['user_' . $k] = $v;
            }

            Response::redirect('/');
        } else {
            $_SESSION['login'] = 'Votre email ou / et mot de passe n\'est pas valide';
            Response::redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function destroy()
    {

    }
}