<?php

namespace Tests\Unit;

use App\Application\Services\ImportFileService;
use App\Domain\Interfaces\Repositories\IImportFilesRepository;
use App\Infrastructure\Database\Models\Document;
use App\Infrastructure\Database\Models\ImportedFile;
use App\Rules\MaxContentFieldSize;
use App\Rules\Uppercase;
use App\Validators\ConteudoValidator;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Validation\ValidationException;
use Mockery;
use PHPUnit\Framework\TestCase;
use Storage;

class ImportedFileTest extends TestCase
{

    public function test ()
    {

        $fail = fn($message) => $this->assertEquals($message, 'The :attribute must be uppercase.');

        $validator = new Uppercase();

        $validator->validate('myparam', 'myvalue', $fail);

        // i need to assert here, $fail contains the failure message
    }


}
