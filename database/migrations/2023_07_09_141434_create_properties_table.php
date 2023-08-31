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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('title');
            $table->integer('bedroom')->nullable()->default(0);
            $table->integer('bathroom')->nullable()->default(0);
            $table->string('kitchen')->nullable()->default(0);
            $table->bigInteger('floor')->nullable()->default(0);
            $table->integer('area')->nullable()->default(0);
            $table->string('deal_type');
            $table->text('description');
            $table->boolean('approve')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
