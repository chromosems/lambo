<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('contact');
            $table->string('location');
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('customers');
    }
}
