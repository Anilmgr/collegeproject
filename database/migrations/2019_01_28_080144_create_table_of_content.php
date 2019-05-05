<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateTableOfContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tablecontents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->integer('menu_id')->unsigned()->nullable();
            $table->foreign('menu_id')->reference('id')->on('menus')->onDelete('set null')
                                      ->references('id')->on('menus')
                                                        ->onUpdate('cascade');
            $table->integer('submenu_id')->unsigned()->nullable();
            $table->foreign('submenu_id')->reference('id')->on('submenus')->onDelete('set null')
                                        ->references('id')->on('submenus')->onUpdate('cascade');
            $table->boolean('status');
            $table->boolean('featured')->default(0);
            $table->mediumtext('featured_image')->nullable();
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
        //
        Schema::dropIfExists('tablecontents');  
    }
}