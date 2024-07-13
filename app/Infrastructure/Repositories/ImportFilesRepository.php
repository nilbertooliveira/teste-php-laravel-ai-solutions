<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\Repositories\IImportFilesRepository;
use App\Infrastructure\Database\Models\ImportedFile;
use Illuminate\Database\Eloquent\Collection;

class ImportFilesRepository implements IImportFilesRepository
{

    /**
     * @var ImportedFile
     */
    private ImportedFile $importedFile;

    /**
     * @param ImportedFile $importedFile
     */
    public function __construct(ImportedFile $importedFile)
    {
        $this->importedFile = $importedFile;
    }

    public function store(array $data): ImportedFile
    {
        return $this->importedFile->create($data);
    }

    public function update(array $data): bool
    {
        return $this->importedFile->updateOrFail($data);
    }

    public function list(): Collection
    {
        return $this->importedFile->get();
    }
}
