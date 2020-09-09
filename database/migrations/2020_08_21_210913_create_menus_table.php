<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateMenusTable extends Migration
  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('menus', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('route');
        $table->integer('title_menu_id')->unsigned();
        $table->timestamps();
        $table->engine = "InnoDB";
        $table->charset = 'utf8';
        $table->collation = 'utf8_general_ci';

        $table->foreign('title_menu_id')->references('id')->on('title_menus');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('menus');
    }
  }
