<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aCollapTable | Demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- plugin -->
    <script src="{{ URL::to('js/jquery.aCollapTable.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#robotReport').aCollapTable({
                startCollapsed: true,
                addColumn: false,
                plusButton: '<i class="glyphicon glyphicon-plus"></i> ',
                minusButton: '<i class="glyphicon glyphicon-minus"></i> '
            });
        });
    </script>
</head>
<body>
<table class="collaptable table-bordered table-hover" id="robotReport">
    <tr>
        <th>suiteId</th>
        <th>testId</th>
        <th>kwId</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <?php foreach($suites as $suite)
    { ?>
        <tr data-id={{$suite['suiteId']}} data-parent="">
            <td></td>
            <td></td>
            <td></td>
            <td>suiteId</td>
            <td>{{$suite['suiteId']}}</td>
        </tr>
            <tr data-parent={{$suite['suiteId']}}>
                <td>{{$suite['suiteId']}}</td>
                <td></td>
                <td></td>
                <td>update_at</td>
                <td>{{$suite['updated_at']}}</td>
            </tr>
            <tr data-parent={{$suite['suiteId']}}>
                <td>{{$suite['suiteId']}}</td>
                <td></td>
                <td></td>
                <td>source</td>
                <td>{{$suite['source']}}</td>
            </tr>
            <tr data-parent={{$suite['suiteId']}}>
                <td>{{$suite['suiteId']}}</td>
                <td></td>
                <td></td>
                <td>id</td>
                <td>{{$suite['id']}}</td>
            </tr>
            <tr data-parent={{$suite['suiteId']}}>
                <td>{{$suite['suiteId']}}</td>
                <td></td>
                <td></td>
                <td>name</td>
                <td>{{$suite['name']}}</td>
            </tr>
            <tr data-parent={{$suite['suiteId']}}>
                <td>{{$suite['suiteId']}}</td>
                <td></td>
                <td></td>
                <td>doc</td>
                <td>{{$suite['doc']}}</td>
            </tr>
            <tr data-parent={{$suite['suiteId']}}>
                <td>{{$suite['suiteId']}}</td>
                <td></td>
                <td></td>
                <td>status</td>
                <td>{{$suite['status']}}</td>
            </tr>
            <tr data-parent={{$suite['suiteId']}}>
                <td>{{$suite['suiteId']}}</td>
                <td></td>
                <td></td>
                <td>endTime</td>
                <td>{{$suite['endTime']}}</td>
            </tr>
            <tr data-parent={{$suite['suiteId']}}>
                <td>{{$suite['suiteId']}}</td>
                <td></td>
                <td></td>
                <td>startTime</td>
                <td>{{$suite['startTime']}}</td>
            </tr>
            <?php foreach($suite['tests'] as $test)
            { ?>
                <tr data-id={{$test['testId']}} data-parent={{$suite['suiteId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>testId</td>
                    <td>{{$test['testId']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>created_at</td>
                    <td>{{$test['created_at']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>updated_at</td>
                    <td>{{$test['updated_at']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>suiteId</td>
                    <td>{{$test['suiteId']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>id</td>
                    <td>{{$test['id']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>name</td>
                    <td>{{$test['name']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>status</td>
                    <td>{{$test['status']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>endTime</td>
                    <td>{{$test['endTime']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>critical</td>
                    <td>{{$test['critical']}}</td>
                </tr>
                <tr data-parent={{$test['testId']}}>
                    <td></td>
                    <td>{{$test['testId']}}</td>
                    <td></td>
                    <td>startTime</td>
                    <td>{{$test['startTime']}}</td>
                </tr>
                <?php foreach($test['kws'] as $kw)
                { ?>
                <tr data-id={{$kw['kwId']}} data-parent={{$test['testId']}}>
                    <td></td>
                    <td></td>
                    <td>{{$kw['kwId']}}</td>
                    <td>kwId</td>
                    <td>{{$kw['kwId']}}</td>
                </tr>
                <tr data-parent={{$kw['kwId']}}>
                    <td></td>
                    <td></td>
                    <td>{{$kw['kwId']}}</td>
                    <td>created_at</td>
                    <td>{{$kw['created_at']}}</td>
                </tr>
                <tr data-parent={{$kw['kwId']}}>
                    <td></td>
                    <td></td>
                    <td>{{$kw['kwId']}}</td>
                    <td>updated_at</td>
                    <td>{{$kw['updated_at']}}</td>
                </tr>
                <tr data-parent={{$kw['kwId']}}>
                    <td></td>
                    <td></td>
                    <td>{{$kw['kwId']}}</td>
                    <td>testId</td>
                    <td>{{$kw['testId']}}</td>
                </tr>
                <tr data-parent={{$kw['kwId']}}>
                    <td></td>
                    <td></td>
                    <td>{{$kw['kwId']}}</td>
                    <td>name</td>
                    <td>{{$kw['name']}}</td>
                </tr>
                <tr data-parent={{$kw['kwId']}}>
                    <td></td>
                    <td></td>
                    <td>{{$kw['kwId']}}</td>
                    <td>status</td>
                    <td>{{$kw['status']}}</td>
                </tr>
                <tr data-parent={{$kw['kwId']}}>
                    <td></td>
                    <td></td>
                    <td>{{$kw['kwId']}}</td>
                    <td>endTime</td>
                    <td>{{$kw['endTime']}}</td>
                </tr>
                <tr data-parent={{$kw['kwId']}}>
                    <td></td>
                    <td></td>
                    <td>{{$kw['kwId']}}</td>
                    <td>startTime</td>
                    <td>{{$kw['startTime']}}</td>
                </tr>
            <?php }}} ?>
</table>
</body>
</html>
<body>
<?php //dd($suites)?>