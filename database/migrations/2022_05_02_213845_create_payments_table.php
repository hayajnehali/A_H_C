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
        Schema::create('payments', function (Blueprint $table) {
            $table->unsignedBigInteger("customer_id");
            $table->unsignedBigInteger("contract_id");
            $table->double("total_price", 8, 2);
            $table->foreign("customer_id")->references("customer_id")->on("customers")->onDelete("cascade");
            $table->foreign("contract_id")->references("contract_id")->on("contracts")->onDelete("cascade");
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
        Schema::dropIfExists('payments');
    }
};
