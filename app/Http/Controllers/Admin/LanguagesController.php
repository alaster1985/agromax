<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LanguageStoreRequest;
use App\Language;
use Illuminate\Http\Request;

class LanguagesController extends Controller
{
    public function getLanguagesForSelect()
    {
        $languages = Language::getLanguages();
        return $languages;
    }

    public function viewLanguages()
    {
        $allLanguages = Language::all();
        $allLanguages = $allLanguages->sortBy(function($allLanguages) {
            return sprintf('%-12s%s', $allLanguages->disable, $allLanguages->name);
        });


        return view('admin/viewLanguages', ['allLanguages' => $allLanguages]);
    }

    public function editLanguages(Request $request)
    {
        $languageForEdit = Language::getLanguageById($request->lang);
        if (is_null($languageForEdit)) {
            return redirect()->back();
        } else {
            return view('admin/editLanguages', ['language' => $languageForEdit]);
        }
    }

    public function updateLanguage(LanguageStoreRequest $request)
    {
        Language::updateLanguage($request);
        return redirect()->route('viewLanguages')->with('message', 'DONE!');
    }
}
