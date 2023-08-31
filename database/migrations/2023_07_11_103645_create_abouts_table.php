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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->text('shortdi')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni saepe, explicabo nihil. Est, autem error cumque ipsum repellendus veniam sed blanditiis unde ullam maxime veritatis perferendis cupiditate, at non esse!
            Enim, nisi labore exercitationem facere cupiditate nobis quod autem veritatis quis minima expedita. Cumque odio illo iusto reiciendis, labore impedit omnis, nihil aut atque, facilis necessitatibus asperiores porro qui nam.');
            $table->text('longdi')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni saepe, explicabo nihil. Est, autem error cumque ipsum repellendus veniam sed blanditiis unde ullam maxime veritatis perferendis cupiditate, at non esse!
            Enim, nisi labore exercitationem facere cupiditate nobis quod autem veritatis quis minima expedita. Cumque odio illo iusto reiciendis, labore impedit omnis, nihil aut atque, facilis necessitatibus asperiores porro qui nam');
            $table->string('quality')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.');
            $table->string('reliable')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.');
            $table->string('Easy')->default('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste.')->default();
            $table->string('image')->default()->default('/upload/about/hero_bg_3.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
