<?php

namespace App\Providers;

<<<<<<< HEAD
use Carbon\Carbon;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< HEAD
        \App\User::class => \App\Policies\UserPolicy::class,
        \App\Article::class => \App\Policies\ArticlePolicy::class,
        \App\Comment::class => \App\Policies\CommentPolicy::class,
        \App\Discussion::class => \App\Policies\DiscussionPolicy::class,
=======
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

<<<<<<< HEAD
        Passport::routes();
=======
        //
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
    }
}
