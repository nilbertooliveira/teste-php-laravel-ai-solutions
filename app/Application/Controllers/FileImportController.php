<?php

namespace App\Application\Controllers;

use App\Domain\Interfaces\Services\IFileImportService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FileImportController extends Controller
{
    private IFileImportService $fileImportService;

    /**
     * @param IFileImportService $fileImportService
     */
    public function __construct(IFileImportService $fileImportService)
    {
        $this->fileImportService = $fileImportService;
    }

    /**
     * @return View
     */
    public function uploadView(): View
    {
        return view('import-file.index');
    }

    public function upload(Request $request): View
    {

    }
}
