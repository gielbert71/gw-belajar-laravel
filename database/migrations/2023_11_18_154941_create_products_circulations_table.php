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
        Schema::create('products_circulations', function (Blueprint $table) {
            $table->id();
            $table->date('trx_date');
            $table->string('reff', 20);
            $table->unsignedBigInteger('in');
            $table->unsignedBigInteger('out');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('remaining_stock');
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_circulations');
    }
};
