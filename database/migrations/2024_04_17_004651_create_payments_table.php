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
            $table->string('value');
            $table->timestamps();
        });

        Schema::table('payments', function(Blueprint $table){
            $table->unsignedBigInteger('card_id')->nullable();
            $table->foreign('card_id')->references('id')->on('cards');
            $table->unsignedBigInteger('ticket_id')->nullable();
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->unsignedBigInteger('monthly_fair_id')->nullable();
            $table->foreign('monthly_fair_id')->references('id')->on('monthly_fairs');
            $table->unsignedBigInteger('essential_expense_id')->nullable();
            $table->foreign('essential_expense_id')->references('id')->on('essential_expenses');
            $table->unsignedBigInteger('purchase_id')->nullable();
            $table->foreign('purchase_id')->references('id')->on('purchases');
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
