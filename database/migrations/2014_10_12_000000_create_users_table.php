<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id')->unsigned();
            
            $table->string('user_type');
            $table->string('name');
            $table->string('contact');
            $table->string('location');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('image_path');
            $table->string('NIN');
            $table->string('NOK_name');
            $table->string('NOK_contact');
            $table->string('NOK_email');
            $table->string('NOK_NIN');
            $table->string('NOK_location');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
