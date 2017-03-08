<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResep extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('t_resep', function (Blueprint $table){
        $table->increments('id_resep');
        $table->integer('id_user')->unsigned();
        $table->string('judul');
        $table->string('deskripsi');
        $table->text('bahan');
        $table->string('cara_memasak');
        $table->string('foto');
        $table->string('video');
        $table->timestamps();
      });

      Schema::table('t_resep', function (Blueprint $table){
        $table->foreign('id_user')
        ->references('id')
        ->on('users')
        ->onDelete('cascade')
        ->onUpdate('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('t_resep');
    }
}
