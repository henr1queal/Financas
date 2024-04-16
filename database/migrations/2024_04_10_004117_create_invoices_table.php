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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('month');
            $table->integer('year');
            $table->boolean('closed')->default(0);
            $table->boolean('status')->default(0);
            $table->bigInteger('card_id');
            $table->timestamps();
        });

        Schema::table('invoices', function(Blueprint $table){
            $table->unsignedBigInteger('card_id');
            $table->foreign('card_id')->references('id')->on('cards');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
