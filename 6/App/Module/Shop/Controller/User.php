<?php

namespace App\Module\Shop\Controller;

use App\Module\Shop\Server\User as ServerUser;

class User
{
    public static function make()
    {
        ServerUser::make();
    }
}
