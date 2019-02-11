<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function viewUsers()
    {
        $users = User::getUsers();
        return view('admin/viewUsers', ['users' => $users]);
    }

    public function editUsers(Request $request)
    {
        $user = User::getUserById($request->user);
        if (is_null($user)){
            return redirect()->back();
        } else {
            return view('admin/editUsers', ['user' => $user]);
        }
    }

    public function createUser()
    {
        return view('admin/createUser');
    }

    public function updateUsers(UserStoreRequest $request)
    {
        User::updateUser($request);
        return redirect()->back()->with('message', 'DONE!');
    }

    public function addUser(UserStoreRequest $request)
    {
        User::addUser($request);
        return redirect()->back()->with('message', 'DONE!');
    }

    public function deleteUser($id)
    {
        User::deleteUser($id);
        return redirect()->back()->with('message', 'DONE!');
    }

}
