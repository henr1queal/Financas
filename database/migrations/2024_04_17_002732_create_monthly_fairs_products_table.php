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
        Schema::create('monthly_fairs_products', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::table('monthly_fairs_products', function (Blueprint $table) {
            $table->unsignedBigInteger('monthly_fairs_id');
            $table->foreign('monthly_fairs_id')->references('id')->on('monthly_fairs');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_fairs_products');
    }
};
