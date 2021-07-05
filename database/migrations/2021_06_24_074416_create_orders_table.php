<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->integer('tablets_id')->nullable();
            $table->integer('phones_id')->nullable();
            $table->integer('laptops_id')->nullable();
            $table->integer('headphones_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('number_of_product')->nullable();
            $table->text('description', 500)->default('');

            $table->tinyInteger('status')->default(0);
            $table->dateTime('join_date')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
