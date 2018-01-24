<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_table_perros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('race');
            $table->decimal('weight');
            $table->string('cut');
            $table->text('notes');
            $table->string('color');
            $table->string('image');
            $table->rememberToken();
            $table->timestamps();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('create_table_perros');
    }
}
