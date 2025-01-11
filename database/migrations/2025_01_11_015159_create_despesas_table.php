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
        Schema::create('despesas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('descricao', 250);
            $table->decimal('valor', 10,2);
            $table->unsignedBigInteger('tipo_despesas_id');
            $table->unsignedBigInteger('categoria_despesas_id');
            $table->date('data');
            $table->unsignedBigInteger('user_id');

            $table->foreign('tipo_despesas_id')->references('id')->on('tipo_despesas');
            $table->foreign('categoria_despesas_id')->references('id')->on('categoria_despesas');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('despesas');
    }
};
