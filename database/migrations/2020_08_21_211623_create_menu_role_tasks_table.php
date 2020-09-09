<?php

  use Illuminate\Database\Migrations\Migration;
  use Illuminate\Database\Schema\Blueprint;
  use Illuminate\Support\Facades\Schema;

  class CreateMenuRoleTasksTable extends Migration
  {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('menu_role_tasks', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('menu_id')->unsigned();
        $table->integer('user_role_id')->unsigned();
        $table->integer('task_id')->unsigned();
        $table->boolean('status');
        $table->timestamps();
        $table->engine = "InnoDB";
        $table->charset = 'utf8';
        $table->collation = 'utf8_general_ci';
        $table->foreign('menu_id')->references('id')->on('menus');
        $table->foreign('user_role_id')->references('id')->on('user_role')->onDelete('cascade');
        $table->foreign('task_id')->references('id')->on('tasks');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('menu_role_tasks');
    }
  }
