<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_bankings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('iban');
            $table->string('bic');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_bankings');
    }
};
