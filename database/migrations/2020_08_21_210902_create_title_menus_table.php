<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateTitleMenusTable extends Migration
  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('title_menus', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->string('icons');
        $table->integer('order');
        $table->timestamps();
        $table->engine = "InnoDB";
        $table->charset = 'utf8';
        $table->collation = 'utf8_general_ci';
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('title_menus');
    }
  }
