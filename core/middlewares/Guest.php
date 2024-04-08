<?php

namespace Core\Middlewares;

use Core\Response;

class Guest
{
    public function handle(): void
    {
        if (isset($_SESSION['user_id'])) {
            Response::redirect('/');
        }
    }
}