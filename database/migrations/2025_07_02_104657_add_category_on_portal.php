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
        Schema::table('portals', function (Blueprint $table) {
            // Add the 'category' column with a default value of 'general'
            $table->string('category')->default('general')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portals', function (Blueprint $table) {
            // Drop the 'category' column if it exists
            $table->dropColumn('category');
        });
    }
};
