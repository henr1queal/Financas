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
        Schema::create('essential_expenses', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('expected_value');
            $table->boolean('due_date');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });

        Schema::table('essential_expenses', function (Blueprint $table) {
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('essential_expenses');
    }
};
