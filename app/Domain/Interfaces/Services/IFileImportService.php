<?php

namespace App\Domain\Interfaces\Services;

interface IFileImportService
{
    public function uploadFile();

    public function readLineJson(string $fileName);

    public function processLineJson();
}
