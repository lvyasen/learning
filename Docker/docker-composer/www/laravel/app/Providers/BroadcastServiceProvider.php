<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Broadcast;
=======
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
