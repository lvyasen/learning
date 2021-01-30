<?php

use Illuminate\Foundation\Inspiring;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Artisan;
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
<<<<<<< HEAD
});
=======
})->purpose('Display an inspiring quote');
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
