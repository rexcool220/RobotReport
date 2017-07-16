<?php

namespace App\Http\Controllers;

use App\suite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\report;

class reportController extends Controller
{
    public function showReport($reportId)
    {
        $suites = suite::where('reportID', $reportId)->get()->toArray();
        return view('report/report', compact('suites'));
    }
    public function uploadFile()
    {
        return view('uploadFile/uploadFile');
    }
    public function processFile(Request $request)
    {
        $file = Input::file('uploadFile');
        $extension = $file->getClientOriginalExtension();
        $file_name = strval(time()).str_random(5).'.'.$extension;

        $destination_path = public_path().'/upload/';

        if (Input::hasFile('uploadFile')) {
            $upload_success = $file->move($destination_path, $file_name);
            reportController::report($destination_path . $file_name);
            $result = "pass";
        } else {
            return view('processFile/result');
            $result = "false";
        }
        return view('processFile/result', compact('result'));
    }
    private function report($filename)
    {
        $xml = simplexml_load_file($filename);
        $suites = $xml->xpath("/robot/suite");
        $reportSource = $suites[0]['source'];
        $reportId = $suites[0]['id'];
        $reportName = $suites[0]['name'];
        $reportStatus = $suites[0]->status['status'];
        $reportEndTime = $suites[0]->status['endtime'];
        $reportStartTime = $suites[0]->status['starttime'];
        \DB::table('report')->insert(
            ['created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
                'source' => $reportSource,
                'id' => $reportId,
                'name' => $reportName,
                'status' => $reportStatus == 'PASS' ? true : false,
                'endTime' => $reportEndTime,
                'startTime' => $reportStartTime]
        );
        $reportLastInsertId = \DB::table('report')->select('reportId')->max('reportId');
        foreach($suites[0]->suite as $suite)
        {
            $suitSource = $suite['source'];
            $suiteId = $suite['id'];
            $suiteName = $suite['name'];
            $suiteDoc = $suite->doc;
            $suiteStatus = $suite->status['status'];
            $suiteEndTime = $suite->status['endtime'];
            $suiteStartTime = $suite->status['starttime'];
            \DB::table('suite')->insert(
                ['created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'reportId' => $reportLastInsertId,
                    'source' => $suitSource,
                    'id' => $suiteId,
                    'name' => $suiteName,
                    'doc' => $suiteDoc,
                    'status' => $suiteStatus == 'PASS' ? true : false,
                    'endTime' => $suiteEndTime,
                    'startTime' => $suiteStartTime]
            );
            $suiteLastInsertId = \DB::table('suite')->select('suiteId')->max('suiteId');
            foreach($suite->test as $test)
            {
                $testId = $test['id'];
                $testName = $test['name'];
                $testStatus = $test->status['status'];
                $testEndTime = $test->status['endtime'];
                $testCritical = $test->status['critical'];
                $testStartTime = $test->status['starttime'];
                \DB::table('test')->insert(
                    ['created_at' => \Carbon\Carbon::now(),
                        'updated_at' => \Carbon\Carbon::now(),
                        'suiteId' => $suiteLastInsertId,
                        'id' => $testId,
                        'name' => $testName,
                        'status' => $testStatus == 'PASS' ? true : false,
                        'endTime' => $testEndTime,
                        'critical' => $testCritical == 'yes' ? true : false,
                        'startTime' => $testStartTime]
                );
                $testLastInsertId = \DB::table('test')->select('testId')->max('testId');
                foreach($test->kw as $kw)
                {
                    $kwName = $kw['name'];
                    $kwStatus = $kw->status['status'];
                    $kwEndTime = $kw->status['endtime'];
                    $kwStartTime = $kw->status['starttime'];
                    \DB::table('kw')->insert(
                        ['created_at' => \Carbon\Carbon::now(),
                            'updated_at' => \Carbon\Carbon::now(),
                            'testId' => $testLastInsertId,
                            'name' => $kwName,
                            'status' => $kwStatus == 'PASS' ? true : false,
                            'endTime' => $kwEndTime,
                            'startTime' => $kwStartTime]
                    );
                }
            }
        }
    }
}
