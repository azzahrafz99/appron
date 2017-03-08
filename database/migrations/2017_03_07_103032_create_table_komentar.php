<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKomentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('t_komentar', function (Blueprint $table){
        $table->increments('id_komentar');
        $table->integer('id_user')->unsigned();
        $table->integer('id_resep')->unsigned();
        $table->text('komentar');
        $table->timestamps();

        $table->foreign('id_user')
        ->references('id')
        ->on('users')
        ->onDelete('cascade')
        ->onUpdate('cascade');

        $table->foreign('id_resep')
        ->references('id_resep')
        ->on('t_resep')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      });

    }

    //   Schema::table('t_komentar', function (Blueprint $table){
    //     $table->foreign('id_user')
    //     ->references('id')
    //     ->on('users')
    //     ->onDelete('cascade')
    //     ->onUpdate('cascade');
    //
    //     $table->foreign('id_resep')
    //     ->references('id_resep')
    //     ->on('t_resep')
    //     ->onDelete('cascade')
    //     ->onUpdate('cascade');
    //   });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('t_komentar');
    }
}
