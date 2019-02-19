<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ExLotsController extends Controller
{
    public function viewExLots()
    {
        $allExLots = DB::table('exclusive_lots')->paginate(17);
        return view('admin/viewExLots', ['allExLots' => $allExLots]);
    }
}
