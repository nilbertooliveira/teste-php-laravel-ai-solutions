<?php

namespace App\Application\Controllers;

use App\Domain\Interfaces\Services\IImportFileService;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ImportFileController extends Controller
{
    private IImportFileService $fileImportService;

    /**
     * @param IImportFileService $fileImportService
     */
    public function __construct(IImportFileService $fileImportService)
    {
        $this->fileImportService = $fileImportService;
    }

    /**
     * @return View
     */
    public function uploadView(): View
    {
        $response = $this->fileImportService->list();

        return view('import-file.upload', ['data' => $response->getData()]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function upload(Request $request): RedirectResponse
    {
        $response = $this->fileImportService->uploadFile($request);

        return redirect()->back();
    }
}
