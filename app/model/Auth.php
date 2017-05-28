<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    public static function checkLogin() {
        return true;
    }
}
