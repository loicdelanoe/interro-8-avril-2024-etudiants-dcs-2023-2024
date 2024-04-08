<?php

namespace App\models;

use Core\Database;

class User extends Database
{
    protected string $table = 'users';
    protected string $database_name = 'users';


}