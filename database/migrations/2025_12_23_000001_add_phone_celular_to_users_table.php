<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Only add the column if it doesn't already exist (to avoid duplicate column errors)
        if (! Schema::hasColumn('users', 'phone_celular')) {
            Schema::table('users', function (Blueprint $table) {
                $table->string('phone_celular', 20)->nullable()->after('email');
            });
        }
    }

    public function down(): void
    {
        // Only drop the column if it exists
        if (Schema::hasColumn('users', 'phone_celular')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('phone_celular');
            });
        }
    }
};