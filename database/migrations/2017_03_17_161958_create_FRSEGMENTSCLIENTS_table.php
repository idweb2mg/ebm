<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRSEGMENTSCLIENTSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRSEGMENTSCLIENTS', function(Blueprint $table){
       $table->increments('ID');
       $table->enum('TYPE', array('1','2','3','4','5'));
       $table->text('CONTENU');
       $table->string('TITRE',30);
       $table->integer('ID_HELP')->unsigned();
       $table->foreign('ID_HELP')->references('ID')->on('FRHELP');
       $table->integer('ID_MATRICE')->unsigned();
       $table->foreign('ID_MATRICE')->references('ID')->on('FRMATRICE');
     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRSEGMENTSCLIENTS');
    }

}//class CreateFRSEGMENTSCLIENTSTable extends Migration
