<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFRPROJETTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FRPROJET', function(Blueprint $table) {
            $table->increments('ID');
            $table->string('LIBELLEPROJET', 30);
            $table->enum('TYPEPROJET', array('1','2','3','4'));
            $table->integer('ID_MATRICE')->unsigned();
            $table->integer('ID_LANGUE')->unsigned();
            $table->integer('ID_HELP')->unsigned();
            $table->foreign('ID_MATRICE')->references('ID')->on('FR_MATRICE');
            $table->foreign('ID_LANGUE')->references('ID')->on('FR_LANGUE');
            $table->foreign('ID_HELP')->references('ID')->on('FR_HELP');
            $table->timestamp('DATECREATION');
            $table->timestamp('DATEENREGISTREMENT');
        });




    } // function up()

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('FRPROJET');



    } // public function down()

} // class CreateFRPROJETTable extends Migration