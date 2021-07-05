<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaptopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laptops', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500)->default('');
            $table->string('code', 200)->default('');
            $table->string('origin', 200)->default('');
            $table->integer('price')->nullable();
            $table->string('picture', 200)->default('');
            $table->tinyInteger('status')->default(0);
            $table->text('description')->nullable()->default(null);
            $table->text('configuration')->nullable()->default(null);
           
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laptops');
    }
}
