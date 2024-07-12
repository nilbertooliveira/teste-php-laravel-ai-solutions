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
        Schema::table('imported_files', function (Blueprint $table) {
            $table->unique('file_name');
            $table->unique('error_log_file_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('imported_files', function (Blueprint $table) {
            $table->dropUnique('imported_files_file_name_unique');
            $table->dropUnique('imported_files_error_log_file_name_unique');
        });
    }
};
