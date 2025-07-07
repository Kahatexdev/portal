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
        Schema::table('suggestion_boxes', function (Blueprint $table) {
            $table->text('reply')->nullable()->after('message');
            $table->string('status', 20)->default('pending')->after('reply');
            $table->timestamp('replied_at')->nullable()->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suggestion_boxes', function (Blueprint $table) {
            $table->dropColumn(['reply', 'status', 'replied_at']);
        });
    }
};
