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
            $table->increments('id');            
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');            
            $table->string('email')->unique();
            $table->boolean('gender')->default(1);
            $table->boolean('active')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->Enum('identity', [0,1,2] );            //0 - admin , 1 - teacher , 2 - student
            $table->string('password');                        
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
