<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\suite;

class DatatablesController extends Controller
{
    public function getIndex()
    {
        $data = suite::all ();
        return view('datatables.index')->withData($data);
    }
}
