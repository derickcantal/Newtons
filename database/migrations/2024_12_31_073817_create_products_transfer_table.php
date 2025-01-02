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
        Schema::create('products_transfer', function (Blueprint $table) {
            $table->integer('ptid')->primary();
            $table->string('pname');
            $table->decimal('origprice', $precision = 8, $scale = 2);
            $table->integer('qty');
            $table->integer('stocks');
            $table->dateTime('purchasedate');
            $table->string('status');
            $table->string('notes');
            $table->string('created_by');
            $table->string('updated_by');
            $table->dateTime('timerecorded');
            $table->string('posted');
            $table->integer('mod');
            $table->string('copied');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products_transfer');
    }
};
