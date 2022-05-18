<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id('contract_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("car_id");
            $table->foreign("customer_id")->references("customer_id")->on("customers")->onDelete("cascade");
            $table->foreign("car_id")->references("car_id")->on("cars")->onDelete("cascade");

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
        Schema::dropIfExists('contracts');
    }
};
