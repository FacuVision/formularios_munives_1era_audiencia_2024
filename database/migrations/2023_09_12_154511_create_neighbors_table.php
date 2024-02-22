<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNeighborsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neighbors', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("lastname_p");
            $table->string("lastname_m");
            $table->string("document");
            $table->string("territory");
            $table->string("type_organization");
            $table->string("type")->nullable();
            $table->date("creation_date");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('neighbors');
    }
}
