<?php

namespace App;

use App\Services\UploadPdfService;
use Illuminate\Database\Eloquent\Model;

class Presentation extends Model
{
    protected $fillable = [
        'name',
        'file_name',
        'file_path',
        'disable',
    ];

    public static function getPresentations()
    {
        $presentations = Presentation::all();
        return $presentations;
    }

    public static function createPresentation($request)
    {
        $presentation = new UploadPdfService();
        $presentation->uploadPresentationPdf($request);
        $newPdfFileName = $presentation->newPresentationPdfFileName;
        $pathForNewPdfFile = 'presentations/';
        $newPdfFile = $pathForNewPdfFile . $newPdfFileName;
        $newPresentation = new Presentation($request->input() + [
                'file_name' => $newPdfFileName,
                'file_path' => $newPdfFile,
                'disable' => 1,
            ]);
        $newPresentation->save();
    }

    public static function getPresentationById($id)
    {
        $presentationById = Presentation::find($id);
        return $presentationById;
    }
    
    public static function updatePresentation($request)
    {
        $presentationToUpdate = Presentation::find($request->presentation_id);
        $presentationToUpdate->name = $request->name;
        $presentationToUpdate->disable = $request->disable;

        if (isset($request->pdf)) {
            $newPresentationFile = new UploadPdfService();
            $newPresentationFile->uploadPresentationPdf($request);
            $newPdfFileName = $newPresentationFile->newPresentationPdfFileName;
            $pathForNewPdfFile = 'presentations/';
            $newPdfFile = $pathForNewPdfFile . $newPdfFileName;
            $presentationToUpdate->file_name = $newPdfFileName;
            $presentationToUpdate->file_path = $newPdfFile;
        }
        $presentationToUpdate->save();
    }
}
