<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LotStoreRequest;
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

    public function editLots(Request $request)
    {
        $lot = Lot::getLotById($request->lot);
        if (is_null($lot)) {
            return redirect()->back();
        } else {
            return view('admin/editLots', ['lot' => $lot]);
        }
    }

    public function addLot(LotStoreRequest $request)
    {
        Lot::createLot($request);
        return redirect()->back()->with('message', 'DONE!');
    }

    public function updateLot(LotStoreRequest $request)
    {
        Lot::updateLot($request);
        return redirect()->back()->with('message', 'DONE!');
    }

    public function deleteLot($id)
    {
        Lot::deleteLot($id);
        return redirect()->back()->with('message', 'DONE!');
    }
}
