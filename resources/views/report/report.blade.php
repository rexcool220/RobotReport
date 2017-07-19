<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RobotReport</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- plugin -->
    <script src="{{ URL::to('js/jquery.aCollapTable.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#robotReport').aCollapTable({
                startCollapsed: true,
                addColumn: false,
                plusButton: '<i class="glyphicon glyphicon-plus"></i> ',
                minusButton: '<i class="glyphicon glyphicon-minus"></i> '
            });
        });
    </script>
    <style>
        table, td, th {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th {
            background-color: #4CAF50;
            height: 50px;
        }
    </style>
</head>
<body>
<table class="collaptable table-bordered table-hover" id="robotReport">
    <tr>
        <th>name</th>
        <th>value</th>
    </tr>
    <?php foreach($tests as $test)
    { ?>
        <tr data-id={{"test".$test['testId']}} data-parent="">
            <td>test name</td>
            <td>{{$test['name']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>test id</td>
            <td>{{$test['id']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>test status</td>
            <td>{{$test['status']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>test endTime</td>
            <td>{{$test['endTime']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>test startTime</td>
            <td>{{$test['startTime']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td></td>
            <td>
                <table class="collaptable table-bordered table-hover" id="robotReport">
                <tr>
                    <th>name</th>
                    <th>value</th>
                </tr>
                <?php foreach($test['kws'] as $kw)
                { ?>
                <tr data-id={{"kw".$kw['kwId']}} data-parent="">
                    <td>key word name</td>
                    <td>{{$kw['name']}}</td>
                </tr>
                <tr data-parent={{"kw".$kw['kwId']}}>
                    <td>key word status</td>
                    <td>{{$kw['kwId']}}</td>
                </tr>
                <tr data-parent={{"kw".$kw['kwId']}}>
                    <td>key word endTime</td>
                    <td>{{$test['endTime']}}</td>
                </tr>
                <tr data-parent={{"kw".$kw['kwId']}}>
                    <td>key word startTime</td>
                    <td>{{$kw['startTime']}}</td>
                </tr>
                <tr data-parent={{"kw".$kw['kwId']}}>
                    <td></td>
                    <td>
                        <table class="collaptable table-bordered table-hover" id="robotReport">
                        <tr>
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
            <td></td>
            <td></td>
        </tr>

        <?php } ?>
</table>
</body>
</html>
<body>