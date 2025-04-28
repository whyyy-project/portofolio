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
        Schema::create('portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('tittle');
            $table->text('sort_desc');
            $table->string('category');
            $table->string('instansi');
            $table->string('client');
            $table->string('date'); // date sebagai varchar
            $table->string('url');
            $table->text('head_desc');
            $table->text('desc');
            $table->text('img');
            $table->timestamps(); // otomatis menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio');
    }
};
