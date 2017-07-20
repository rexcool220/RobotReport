<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RobotReport</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="{{ URL::to('js/jquery.aCollapTable.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#testReport').aCollapTable({
                startCollapsed: true,
                addColumn: false,
                plusButton: '<i class="glyphicon glyphicon-plus"></i> ',
                minusButton: '<i class="glyphicon glyphicon-minus"></i> '
            });
        });
    </script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['corechart']});

        google.charts.setOnLoadCallback(drawAllTestChart);

        google.charts.setOnLoadCallback(drawCriticalTestChart);

        function drawAllTestChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            data.addRows([
                ['All Test Pass', {{$suite[0]['allTestsPass']}}],
                ['All Test Fail', {{$suite[0]['allTestsFail']}}]
            ]);

            var options = {
                title: 'All Test Result',
                width: 400,
                height: 300
            };

            var chart = new google.visualization.PieChart(document.getElementById('All_Test_div'));
            chart.draw(data, options);
        }

        function drawCriticalTestChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Topping');
            data.addColumn('number', 'Slices');
            //                foreach($tests as $test)
//                {
//                    foreach($test['kws'] as $kw)
//                    {
//                        foreach($kw['kwDetails'] as $kwDetail)
//                        {
//                            array_push($nameArray, $kwDetail['name']);
//                        }
//                    }
//                }
            data.addRows([
                ['Critical Test Pass', {{$suite[0]['criticalTestsPass']}}],
                ['Critical Test Fail', {{$suite[0]['criticalTestsFail']}}]
            ]);

            var options = {
                title: 'Critical Test Result',
                width: 400,
                height: 300
            };

            var chart = new google.visualization.PieChart(document.getElementById('Critical_Test_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <h1>Summary Information</h1>
            <table class="table">
                <tbody>
                <tr>
                    <td>Status</td>
                    <td class="{{$suite[0]['allTestsFail'] > 0 ? 'bg-danger' : 'bg-success'}}">{{$suite[0]['allTestsFail'] > 0 ? 'Fail' : 'Pass'}}</td>
                </tr>
                <tr>
                    <td>Start Time</td>
                    <td>{{$suite[0]['startTime']}}</td>
                </tr>
                <tr>
                    <td>End Time</td>
                    <td>{{$suite[0]['endTime']}}</td>
                </tr>
                <tr>
                    <td>Elapsed Time</td>
                    <td>00:00:38.920</td>
                </tr>
                <tr>
                    <td>Error</td>
                    <td class="{{$suite[0]['error'] == "\n" ? 'bg-success' : 'bg-danger'}}">{{$suite[0]['error'] == "\n" ? 'No error' : $suite[0]['error']}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-sm-3" id="All_Test_div"></div>
        <div class="col-sm-3" id="Critical_Test_div"></div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <table class="collaptable table-bordered table-hover" id="testReport" width="100%">
                <?php foreach($tests as $test)
                { ?>
                <tr class="bg-info">
                    <th>name</th>
                    <th>value</th>
                </tr>
                <tr>
                    <td>test name</td>
                    <td>{{$test['name']}}</td>
                </tr>
                <tr>
                    <td>test id</td>
                    <td>{{$test['id']}}</td>
                </tr>
                <tr>
                    <td>test status</td>
                    <td>{{$test['status']}}</td>
                </tr>
                <tr>
                    <td>test endTime</td>
                    <td>{{$test['endTime']}}</td>
                </tr>
                <tr>
                    <td>test startTime</td>
                    <td>{{$test['startTime']}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <table class="table-bordered table-hover" width="100%">
                            <tr class="bg-info">
                                <th>name</th>
                                <th>value</th>
                            </tr>
                            <?php foreach($test['kws'] as $kw)
                            { ?>
                            <tr>
                                <td>key word name</td>
                                <td>{{$kw['name']}}</td>
                            </tr>
                            <tr>
                                <td>key word status</td>
                                <td>{{$kw['kwId']}}</td>
                            </tr>
                            <tr>
                                <td>key word endTime</td>
                                <td>{{$test['endTime']}}</td>
                            </tr>
                            <tr>
                                <td>key word startTime</td>
                                <td>{{$kw['startTime']}}</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <table class="table-bordered table-hover" width="100%">
                                        <tr class="bg-info">
                                            <th>name</th>
                                            <th>value</th>
                                        </tr>
                                        <?php foreach($kw['kwDetails'] as $kwDetail)
                                        { ?>
                                        <tr data-id={{"kwDetail".$kwDetail['kwDetailId']}} data-parent="">
                                            <td>key word detail name</td>
                                            <td>{{$kwDetail['name']}}</td>
                                        </tr>
                                        <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                                            <td>key word detail library</td>
                                            <td>{{$kwDetail['library']}}</td>
                                        </tr>
                                        <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                                            <td>key word detail doc</td>
                                            <td>{{$kwDetail['doc']}}</td>
                                        </tr>
                                        <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                                            <td>key word detail msg</td>
                                            <td>{{$kwDetail['msg']}}</td>
                                        </tr>
                                        <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                                            <td>key word detail status</td>
                                            <td>{{$kwDetail['status']}}</td>
                                        </tr>
                                        <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                                            <td>key word detail endTime</td>
                                            <td>{{$kwDetail['endTime']}}</td>
                                        </tr>
                                        <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                                            <td>key word detail startTime</td>
                                            <td>{{$kwDetail['startTime']}}</td>
                                        </tr>
                                        <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                                            <td>key word detail image</td>
                                            <td><img src="{{$kwDetail['image']}}" width=800></img></td>
                                        </tr>
                                        <?php } ?>

                                    </table>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
</body>
</html>
<body>
<?php dd($tests) ?>