<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
=======
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('nickname')->nullable();
            $table->text('avatar')->nullable();
            $table->string('email')->unique();
            $table->string('confirm_code', 64)->unique()->nullable();
            $table->tinyInteger('status')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->string('password');
            $table->string('github_id')->nullable();
            $table->string('github_name')->nullable();
            $table->string('github_url')->nullable();
            $table->string('weibo_name')->nullable();
            $table->string('weibo_link')->nullable();
            $table->string('website')->nullable();
            $table->string('description')->nullable();
            $table->enum('email_notify_enabled', ['yes',  'no'])->default('yes')->index();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
=======
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
<<<<<<< HEAD
        Schema::drop('users');
=======
        Schema::dropIfExists('users');
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
    }
}
