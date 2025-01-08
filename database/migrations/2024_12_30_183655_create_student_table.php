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
        Schema::create('student', function (Blueprint $table) {
            $table->integer('sid')->primary();
            $table->string('studentid')->unique();
            $table->integer('levelid');
            $table->string('levelname');
            $table->integer('syid');
            $table->string('syname');
            $table->string('avatar');
            $table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('birthdate');
            $table->string('house')->nullable();
            $table->string('street');
            $table->string('brgy');
            $table->string('city');
            $table->string('province');
            $table->string('fathersname');
            $table->string('foccupation');
            $table->string('mothersname');
            $table->string('moccupation');
            $table->string('guardian');
            $table->string('relationship');
            $table->string('contact');
            $table->string('privilege');
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
        Schema::dropIfExists('student');
    }
};
