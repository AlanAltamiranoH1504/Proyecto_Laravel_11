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
        Schema::create('posts', function (Blueprint $table) {
            //Agregamos columnas a la tabla
            $table->id();
            $table->string('title', 500);
            $table->string('slug', 500);
            $table->text('description');
            $table->text('content');
            $table->string('image');
            $table->enum('posted', ['yes', 'no'])->default('no');
            $table->timestamps();

            //Agregamos FK de la tabla
            $table->foreignId('categoria_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
