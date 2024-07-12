<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('imported_files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->comment('Nome unico do arquivo importado');
            $table->enum('status', ['processing', 'success', 'error']);
            $table->unsignedInteger('imported_lines')->comment('Número total de linhas processadas e importadas com sucesso do arquivo JSON.');
            $table->string('error_log_file_name')->comment('Nome unico do arquivo de erros');
            $table->unsignedInteger('lines_errors')->comment('Número total de linhas processadas e importadas com sucesso do arquivo JSON.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imported_files');
    }
};
