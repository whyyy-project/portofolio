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
        Schema::create('portofolio', function (Blueprint $table): void {
            $table->id();
            $table->text('slug')->nullabel();
            $table->string('title')->nullabel();
            $table->text('sort_desc')->nullabel();
            $table->string('category')->nullabel();
            $table->string('instansi')->nullabel();
            $table->string('client')->nullabel();
            $table->string('date')->nullabel(); // Jika ingin menyimpan tanggal dalam format string (bukan date asli)
            $table->string('url')->nullable(); // Optional, bisa null
            $table->text('head_desc')->nullabel();
            $table->text('desc')->nullabel();
            $table->text('img')->nullabel(); // Berisi string terpisah dengan <break>
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolio');
    }
};
