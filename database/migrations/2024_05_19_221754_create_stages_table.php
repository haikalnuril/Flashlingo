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
        Schema::create('stages', function (Blueprint $table) {
            $table->id();
            $table->string('level');
            $table->string('jenis');
            $table->string('cover');
            $table->string('item1');
            $table->string('item2');
            $table->string('item3');
            $table->string('item4');
            $table->string('item5');
            $table->string('item6');
            $table->string('item7');
            $table->string('item8');
            $table->string('item9');
            $table->string('item10');
            $table->string('gambar1')->nullable();
            $table->string('gambar1_back')->nullable();
            $table->string('gambar2')->nullable();
            $table->string('gambar2_back')->nullable();
            $table->string('gambar3')->nullable();
            $table->string('gambar3_back')->nullable();
            $table->string('gambar4')->nullable();
            $table->string('gambar4_back')->nullable();
            $table->string('gambar5')->nullable();
            $table->string('gambar5_back')->nullable();
            $table->string('gambar6')->nullable();
            $table->string('gambar6_back')->nullable();
            $table->string('gambar7')->nullable();
            $table->string('gambar7_back')->nullable();
            $table->string('gambar8')->nullable();
            $table->string('gambar8_back')->nullable();
            $table->string('gambar9')->nullable();
            $table->string('gambar9_back')->nullable();
            $table->string('gambar10')->nullable();
            $table->string('gambar10_back')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stages');
    }
};
