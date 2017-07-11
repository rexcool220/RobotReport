<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reportController extends Controller
{
    public function report()
    {
        $xml = simplexml_load_file("/home/rex/Downloads/output.xml");
        $suites = $xml->xpath("/robot/suite");
        return view('report/report',compact('suites'));
    }
}
