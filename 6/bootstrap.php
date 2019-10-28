<?php

namespace App;
// spl_autoload_register(function ($class) {
//     $file = str_replace('\\', '/', $class) . '.php';
//     require $file;
// });
class Bootstrap
{
    public static function boot()
    {
        spl_autoload_register([new self, 'autoload']);
    }
    public function autoload($class)
    {
        $file = str_replace('\\', '/', $class) . '.php';
        require $file;
    }
}
Bootstrap::boot();
