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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_id');
            $table->date('tanggal');
            $table->string('no_hp');
            $table->string('nama');
            $table->boolean('status')->default(false);
            $table->foreignId('hutangs_id')->nullable();
            $table->integer('single_hutang')->nullable();
            $table->string('created_by','30');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
