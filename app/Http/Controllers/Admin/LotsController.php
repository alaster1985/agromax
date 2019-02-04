<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Lot;
use Illuminate\Http\Request;

class LotsController extends Controller
{
    public function viewLots()
    {
        $allLots = Lot::getAllLots();
        return view('admin/viewLots', ['allLots' => $allLots]);
    }

    public function createLot()
    {
        return view('admin/createLot');
    }

    public function editLots($id)
    {
        $lot = Lot::getLotById($id);
        return view('admin/editLots', ['lot' => $lot]);
    }

    public function addLot(Request $request)
    {
        Lot::createLot($request);
        return redirect()->back()->with('message', 'DONE!');
    }
}
