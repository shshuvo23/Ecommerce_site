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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('brand_id');
            $table->integer('employee_id');
            $table->string('product_name');
            $table->text('product_detail');
            $table->text('image');
            $table->string('barcode');
            $table->decimal('price', 10, 2);
            $table->integer('hit_count')->default(0);
            $table->tinyInteger('Offer_status')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
