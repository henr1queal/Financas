<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('payment_method');
            $table->integer('installments')->default(1);
            $table->bigInteger('card_id')->nullable();
            $table->string('value');
            $table->timestamps();
        });

        Schema::table('payments', function(Blueprint $table){
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
