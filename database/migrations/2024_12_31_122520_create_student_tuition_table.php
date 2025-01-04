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
        Schema::create('student_tuition', function (Blueprint $table) {
            $table->increments('stid')->primary();
            $table->integer('studentid');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->integer('syid');
            $table->string('syname');
            $table->integer('yearlevelid');
            $table->string('levelname');
            $table->decimal('reg', $precision = 8, $scale = 2);
            $table->decimal('compfee', $precision = 8, $scale = 2);
            $table->decimal('labfee', $precision = 8, $scale = 2);
            $table->decimal('tuitionfee', $precision = 8, $scale = 2);
            $table->decimal('books', $precision = 8, $scale = 2);
            $table->decimal('ins', $precision = 8, $scale = 2);
            $table->decimal('id', $precision = 8, $scale = 2);
            $table->decimal('testpaper', $precision = 8, $scale = 2);
            $table->decimal('totalfees', $precision = 8, $scale = 2);
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
        Schema::dropIfExists('student_tuition');
    }
};
