<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\report;

class DatatablesController extends Controller
{
    public function getIndex()
    {
        $data = report::all ();
        return view('datatables.index')->withData($data);
    }
}
