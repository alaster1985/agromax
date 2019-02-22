<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PresentationStoreRequest;
use App\Presentation;
use Illuminate\Http\Request;

class PresentationsController extends Controller
{
    public function viewPresentations()
    {
        $allPresentations = Presentation::getPresentations();
        return view('admin/viewPresentations', ['allPresentations' => $allPresentations]);
    }

    public function createPresentation()
    {
        return view('admin/createPresentation');
    }

    public function addPresentation(PresentationStoreRequest $request)
    {
        Presentation::createPresentation($request);
        return redirect()->back()->with('message', 'DONE!');
    }

    public function editPresentations(Request $request)
    {
        $presentationForEdit = Presentation::getPresentationById($request->pdf_id);
        if (is_null($presentationForEdit)) {
            return redirect()->back();
        } else {
            return view('admin/editPresentations', ['presentation' => $presentationForEdit]);
        }
    }

    public function updatePresentation(PresentationStoreRequest $request)
    {
        Presentation::updatePresentation($request);
        return redirect()->back()->with('message', 'DONE!');
    }
}
