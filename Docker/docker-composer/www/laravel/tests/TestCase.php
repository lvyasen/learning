<?php

namespace Tests;

<<<<<<< HEAD
use App\User;
use Laravel\Passport\Passport;
=======
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
<<<<<<< HEAD

    public function actingAsAdmin()
    {
        Passport::actingAs(
            factory(User::class, 'admin')->create(),
            ['user', 'article']
        );

        return $this;
    }
}
=======
}
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
