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
        // Adicionar colunas polimórficas às tabelas existentes
        Schema::table('enderecos', function (Blueprint $table) {
            // Remover foreign key antiga se existir
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            
            // Adicionar colunas polimórficas
            $table->morphs('addressable');
            
            // Remover campos duplicados que já existem em outras tabelas
            $table->dropColumn(['name', 'email', 'phone_celular']);
        });
        
        Schema::table('documentos', function (Blueprint $table) {
            // Remover foreign key antiga
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
            
            // Adicionar colunas polimórficas
            $table->morphs('documentable');
            
            // Remover campos duplicados
            $table->dropColumn(['name', 'email', 'phone_celular']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('enderecos', function (Blueprint $table) {
            $table->dropMorphs('addressable');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->string('name')->after('user_id');
            $table->string('email')->after('name');
            $table->string('phone_celular')->nullable()->after('email');
        });
        
        Schema::table('documentos', function (Blueprint $table) {
            $table->dropMorphs('documentable');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name')->after('user_id');
            $table->string('email')->after('name');
            $table->string('phone_celular')->nullable()->after('email');
        });
    }
};
