<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHouseTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_types', function (Blueprint $table) {
            $table->id();
            $table->string('house_type_name_kh')->nullable();
            $table->string('house_type_name_en')->nullable();
            $table->string('abbreviation')->nullable();
            $table->string('house_type_code')->nullable();
            $table->integer('image_id')->nullable();
            $table->string('desc_kh')->nullable();
            $table->string('desc_en')->nullable();
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
        Schema::dropIfExists('house_types');
    }
}
