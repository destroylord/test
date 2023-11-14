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
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('nickname');
            $table->enum('gender', ['L','P']);
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('nationality');
            $table->string('region');
            $table->string('last_education');
            $table->string('major');
            $table->string('school');
            $table->integer('value');
            $table->string('last_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identities');
    }
};
