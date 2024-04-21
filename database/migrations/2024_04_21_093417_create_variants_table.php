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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('options');
            $table->integer('weight')->nullable();
            $table->enum('weight_unit', ['g', 'kg', 'lb', 'oz'])->nullable();
            $table->integer('price');
            $table->integer('cost_per_item')->nullable();
            $table->integer('compare_at_price')->nullable();
            $table->integer('profit')->nullable();
            $table->integer('margin')->nullable();
            $table->text('image')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variants');
    }
};
