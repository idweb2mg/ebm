<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRHELPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('FRHELP', function(Blueprint $table){
       $table->increments('ID');
       $table->text('CONTENU');
       $table->integer('ID_MATRICE')->unsigned();
       $table->foreign('ID_MATRICE')->references('ID')->on('FRMATRICE');
       $table->integer('ID_PROJET')->unsigned();
       $table->foreign('ID_PROJET')->references('ID')->on('FRPROJET');
       $table->integer('ID_CANAUX')->unsigned();
       $table->foreign('ID_CANAUX')->references('ID')->on('FRCANAUX');
       $table->integer('ID_RELATIONCLIENT')->unsigned();
       $table->foreign('ID_RELATIONCLIENT')->references('ID')->on('FRRELATIONCLIENT');
       $table->integer('ID_PROPOSITIONDEVALEUR')->unsigned();
       $table->foreign('ID_PROPOSITIONDEVALEUR')->references('ID')->on('FRPROPOSITIONDEVALEUR');
       $table->integer('ID_SOURCESDEREVENUS')->unsigned();
       $table->foreign('ID_SOURCESDEREVENUS')->references('ID')->on('FRSOURCESDEREVENUS');
       $table->integer('ID_RESSOURCESCLES')->unsigned();
       $table->foreign('ID_RESSOURCESCLES')->references('ID')->on('FRRESSOURCESCLES');
       $table->integer('ID_PARTENARIAT')->unsigned();
       $table->foreign('ID_PARTENARIAT')->references('ID')->on('FRPARTENARIAT');
       $table->integer('ID_ACTIVITESCLES')->unsigned();
       $table->foreign('ID_ACTIVITESCLES')->references('ID')->on('FRACTIVITESCLES');
       $table->integer('ID_STRUCTUREDECOUTS')->unsigned();
       $table->foreign('ID_STRUCTUREDECOUTS')->references('ID')->on('FRSTRUCTUREDECOUTS');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          schema::drop('FRHELP');
    }

} // class CreateFRHELPTable extends Migration
