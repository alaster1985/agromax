<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Social;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    public function viewSocials()
    {
        $allSocials = Social::all();
        return view('admin/viewSocials', ['allSocials' => $allSocials]);
    }

    public function editSocials(Request $request)
    {
        $socialForEdit = Social::getSocialById($request->social);
        if (is_null($socialForEdit)) {
            return redirect()->back();
        } else {
            return view('admin/editSocials', ['social' => $socialForEdit]);
        }
    }

//    public function updateSocial(SocialStoreRequest $request)
    public function updateSocial(Request $request)
    {
        Social::updateSocial($request);
        return redirect()->route('viewSocials')->with('message', 'DONE!');
    }
}
