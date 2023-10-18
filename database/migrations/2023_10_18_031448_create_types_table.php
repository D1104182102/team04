<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('super_effective1');
            $table->string('super_effective2');
            $table->string('super_effective3');
            $table->string('super_effective4');
            $table->string('super_effective5');
            $table->string('not_very_effective1');
            $table->string('not_very_effective2');
            $table->string('not_very_effective3');
            $table->string('not_very_effective4');
            $table->string('not_very_effective5');
            $table->string('not_very_effective6');
            $table->string('not_very_effective7');
            $table->string('not_effective');
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
        Schema::dropIfExists('types');
    }
}