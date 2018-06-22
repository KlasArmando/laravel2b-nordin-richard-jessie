<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandheldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handhelds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam', 100)->unique();
            $table->date('releasedate');
            $table->decimal('price');
            $table->timestamps();
            $table->foreign('company_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('handhelds');
    }
}
