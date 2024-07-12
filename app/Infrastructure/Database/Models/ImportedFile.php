<?php

namespace App\Infrastructure\Database\Models;

use App\Application\Enums\Status;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $file_name
 * @property array $status
 * @property int $imported_lines
 * @property string $error_log_file_name
 * @property int $lines_errors
 * @property DateTime $created_at
 * @property DateTime $updated_at
 */
class ImportedFile extends Model
{
    use HasFactory;

    protected $fillable = [
      'file_name',
      'status',
      'imported_lines',
      'error_log_file_name',
      'lines_errors',
    ];
}
