<?php

namespace App\Http\Controllers\Admin;

use App\Delivery;
use App\Description;
use App\Http\Controllers\Controller;
use App\Http\Requests\LotStoreRequest;
use App\Lot;
use App\Product;
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
}
