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
            $table->integer('payid')->primary();
            $table->string('orno');
            $table->string('payfor');
            $table->decimal('amount', $precision = 8, $scale = 2);
            $table->decimal('cash', $precision = 8, $scale = 2);
            $table->decimal('change', $precision = 8, $scale = 2);
            $table->decimal('totalamount', $precision = 8, $scale = 2);
            $table->string('rdate');
            $table->integer('studentid');
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
        Schema::dropIfExists('payments');
    }
};