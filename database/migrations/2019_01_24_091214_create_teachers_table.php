<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //not all but some attributes of the data suvh as not null and autoincrement in increments are default:
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')
                                        ->onDelete('set null')
                                        ->references('id')->on('users')
                                        ->onUpdate('cascade');
            $table->string('phone', 15)->nullable();
            $table->string('address', 50)->nullable();
            $table->mediumtext('image')->nullable();
            $table->mediumtext('qualification')->nullable();
            $table->text('description')->nullable();
            // $table->integer('menu_id')->nullable();
            $table->string('facebook', 50)->nullable();
            $table->string('linkedin', 50)->nullable();
            $table->string('twitter', 50)->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
