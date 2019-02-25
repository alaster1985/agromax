<?php

namespace App\Http\Controllers\Admin;

use App\Charity;
use App\Http\Controllers\Controller;
use App\Http\Requests\CharityStoreRequest;
use Illuminate\Http\Request;

class CharityController extends Controller
{
    public function viewCharityPosts()
    {
        $allCharityPosts = Charity::getCharityPosts()->sortByDesc('created_at');
        return view('admin/viewCharity', ['allCharityPosts' => $allCharityPosts]);
    }

    public function createCharityPost()
    {
        return view('admin/createCharity');
    }
    public function addCharityPost(CharityStoreRequest $request)
    {
        Charity::createCharityPost($request);
        return redirect()->route('viewCharityPosts')->with('message', 'DONE!');
    }

    public function editCharityPosts(Request $request)
    {
        $charityPostForEdit = Charity::getCharityPostById($request->post_id);
        if (is_null($charityPostForEdit)) {
            return redirect()->back();
        } else {
            return view('admin/editCharity', ['charityPost' => $charityPostForEdit]);
        }
    }

    public function updateCharityPost(CharityStoreRequest $request)
    {
        Charity::updateCharityPost($request);
        return redirect()->route('viewCharityPosts')->with('message', 'DONE!');
    }

}
