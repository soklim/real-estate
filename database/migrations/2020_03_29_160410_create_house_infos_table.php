<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id')->unsigned()->index();
            $table->integer('house_type_id')->unsigned()->index();
            $table->string('block_no')->nullable();
            $table->string('street_no')->nullable();
            $table->string('building_no')->nullable();
            $table->string('house_no')->nullable();
            $table->integer('level');
            $table->string('label')->nullable();
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('house_infos');
    }
}
