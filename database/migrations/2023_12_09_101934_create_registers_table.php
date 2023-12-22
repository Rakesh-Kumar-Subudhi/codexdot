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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('fathername');
            $table->string('email');
            $table->enum('gender' ,['Male' ,'Female' ,'Others']);
            $table->text('city');
            $table->string('state');
            $table->date('dob');
            $table->string('phone');
            $table->string('alt_phone');
            $table->string('last_qualification');
            $table->string('work_experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
