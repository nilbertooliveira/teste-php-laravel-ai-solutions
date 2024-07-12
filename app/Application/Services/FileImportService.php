<?php

namespace App\Application\Services;

use App\Domain\Interfaces\Services\IFileImportService;
use Rs\JsonLines\Exception\File\NonReadable;
use Rs\JsonLines\JsonLines;

class FileImportService implements IFileImportService
{

    public function uploadFile()
    {
        // TODO: Implement uploadFile() method.
    }

    /**
     * @throws NonReadable
     */
    public function readLineJson(string $fileName)
    {
        $json_lines = (new JsonLines())->delineEachLineFromFile($fileName);
        foreach ($json_lines as $json_line) {
            var_dump($json_line);
        }
    }

    public function processLineJson()
    {
        // TODO: Implement processLineJson() method.
    }
}
