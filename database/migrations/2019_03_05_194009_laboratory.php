<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Laboratory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Laboratory',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('full_name');
            $table->string('email');
            $table->char('username');
            $table->string('password');
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('graduated_college_university')->nullable();
            $table->string('graduated_area')->nullable();
            $table->string('photo')->default('/storage/profilepicture.jpg');
            $table->string('Graduated_status')->nullable();

        
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Laboratory');
    }
}
