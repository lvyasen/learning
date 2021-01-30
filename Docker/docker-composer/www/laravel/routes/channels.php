<?php

<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Broadcast;

>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

<<<<<<< HEAD
Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
=======
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
