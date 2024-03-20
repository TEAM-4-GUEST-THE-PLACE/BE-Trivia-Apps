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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('avatars_id')->nullable();
            $table->integer('diamonds_totals')->nullable();
            $table->string('fullname');
            $table->string('username');
            $table->string('email');
            $table->timestamps();
            
            $table->foreign('avatars_id')->references('id')->on('avatars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
