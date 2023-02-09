<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('arabic_title')->nullable();
            $table->string('french_title')->nullable();
            $table->string('link')->nullable();
            $table->text('primary_image')->nullable();
            $table->text('additional_images')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('arabic_excerpt')->nullable();
            $table->string('french_excerpt')->nullable();
            $table->text('description')->nullable();
            $table->text('arabic_description')->nullable();
            $table->text('french_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
};
