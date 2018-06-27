<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consoles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam', 100)->unique();
            $table->date('releasedate');
            $table->decimal('price');
            $table->timestamps();
            $table->unsignedInteger('name_id');
            $table->foreign('name_id')->references('id')->on('companys');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consoles');
    }
}
