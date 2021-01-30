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

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
<<<<<<< HEAD
            $table->string('token')->index();
=======
            $table->string('token');
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
            $table->timestamp('created_at')->nullable();
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
        Schema::drop('password_resets');
=======
        Schema::dropIfExists('password_resets');
>>>>>>> 3a6073f6e867b7c1a5ea710c494f412f26d06fe8
    }
}
