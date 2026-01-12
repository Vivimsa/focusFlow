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
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('meta_id')->constrained()->onDelete('cascade');
            $table->string('titulo');
            $table->string('descricao')->nullable();
            $table->timestamp('concluida_em')->nullable();
            $table->date('data_expiracao')->nullable();
            $table->string('status')->default('a_fazer');
            $table->timestamps();
            $table->index(['user_id', 'concluida_em']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tarefas');
    }
};
