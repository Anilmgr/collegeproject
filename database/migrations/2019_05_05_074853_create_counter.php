<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCounter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('count');
        });
        $data = array(
            array(
                'name' => 'Years',
                'count' => 10
            ),
            array(
                'name' => 'Teachers',
                'count' => 20
            ),
            array(
                'name' => 'Students',
                'count' => 200
            ),
            array(
                'name' => 'Lessons',
                'count' => 100
            )
        );

         // Insert some stuff
        DB::table('counter')->insert($data);
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counter');
    }
}
