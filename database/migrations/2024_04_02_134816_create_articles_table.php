<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->longText('content');
            $table->string('image')->nullable();
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
