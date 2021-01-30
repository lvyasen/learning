<?php

namespace App\Providers;

<<<<<<< HEAD
use App\Article;
use App\Discussion;
use App\Tools\FileManager\BaseManager;
use App\Tools\FileManager\UpyunManager;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
<<<<<<< HEAD
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $lang = config('app.locale') != 'zh_cn' ? config('app.locale') : 'zh';
        \Carbon\Carbon::setLocale($lang);

        Relation::morphMap([
            'discussions' => Discussion::class,
            'articles'    => Article::class,
        ]);

        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('uploader', function ($app) {
            $config = config('filesystems.default', 'public');

            if ($config == 'upyun') {
                return new UpyunManager();
            }

            return new BaseManager();
        });
=======
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
    }
}
