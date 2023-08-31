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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('location')->nullable()->default(' ');
            $table->string('opendays')->nullable()->default(' ');
            $table->string('openHours')->nullable()->default(' ');
            $table->string('email')->nullable()->default(' ');
            $table->text('disclaimer')->nullable()->default(' ');
            $table->string('phon1')->nullable()->default(' ');
            $table->string('phon2')->nullable()->default(' ');
            $table->string('instagramLink')->nullable()->default(' ');
            $table->string('tweeterLink')->nullable()->default(' ');
            $table->string('facebookLink')->nullable()->default(' ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
