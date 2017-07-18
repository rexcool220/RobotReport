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
        $(document).ready(function () {
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
        <th>testId</th>
        <th>kwId</th>
        <th>kwDetailId</th>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <?php foreach($tests as $test)
    { ?>
        <tr data-id={{"test".$test['testId']}} data-parent="">
            <td></td>
            <td></td>
            <td></td>
            <td>testId</td>
            <td>{{$test['testId']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>{{$test['testId']}}</td>
            <td></td>
            <td></td>
            <td>id</td>
            <td>{{$test['id']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>{{$test['testId']}}</td>
            <td></td>
            <td></td>
            <td>name</td>
            <td>{{$test['name']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>{{$test['testId']}}</td>
            <td></td>
            <td></td>
            <td>status</td>
            <td>{{$test['status']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>{{$test['testId']}}</td>
            <td></td>
            <td></td>
            <td>endTime</td>
            <td>{{$test['endTime']}}</td>
        </tr>
        <tr data-parent={{"test".$test['testId']}}>
            <td>{{$test['testId']}}</td>
            <td></td>
            <td></td>
            <td>startTime</td>
            <td>{{$test['startTime']}}</td>
        </tr>
        <?php foreach($test['kws'] as $kw)
        { ?>
            <tr data-id={{"kw".$kw['kwId']}} data-parent={{"test".$test['testId']}}>
                <td></td>
                <td>{{$kw['kwId']}}</td>
                <td></td>
                <td>kwId</td>
                <td>{{$kw['kwId']}}</td>
            </tr>
            <tr data-parent={{"kw".$kw['kwId']}}>
                <td></td>
                <td>{{$kw['kwId']}}</td>
                <td></td>
                <td>updated_at</td>
                <td>{{$kw['updated_at']}}</td>
            </tr>
            <tr data-parent={{"kw".$kw['kwId']}}>
                <td></td>
                <td>{{$kw['kwId']}}</td>
                <td></td>
                <td>name</td>
                <td>{{$kw['name']}}</td>
            </tr>
            <tr data-parent={{"kw".$kw['kwId']}}>
                <td></td>
                <td>{{$kw['kwId']}}</td>
                <td></td>
                <td>status</td>
                <td>{{$kw['kwId']}}</td>
            </tr>
            <tr data-parent={{"kw".$kw['kwId']}}>
                <td></td>
                <td>{{$kw['kwId']}}</td>
                <td></td>
                <td>endTime</td>
                <td>{{$test['endTime']}}</td>
            </tr>
            <tr data-parent={{"kw".$kw['kwId']}}>
                <td></td>
                <td>{{$kw['kwId']}}</td>
                <td></td>
                <td>startTime</td>
                <td>{{$kw['startTime']}}</td>
            </tr>
            <?php foreach($kw['kwDetails'] as $kwDetail)
            { ?>
            <tr data-id={{"kwDetail".$kwDetail['kwDetailId']}} data-parent={{"kw".$kw['kwId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>kwId</td>
                <td>{{$kwDetail['kwDetailId']}}</td>
            </tr>
            <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>name</td>
                <td>{{$kwDetail['name']}}</td>
            </tr>
            <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>library</td>
                <td>{{$kwDetail['library']}}</td>
            </tr>
            <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>doc</td>
                <td>{{$kwDetail['doc']}}</td>
            </tr>
            <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>msg</td>
                <td>{{$kwDetail['msg']}}</td>
            </tr>
            <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>status</td>
                <td>{{$kwDetail['status']}}</td>
            </tr>
            <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>endTime</td>
                <td>{{$kwDetail['endTime']}}</td>
            </tr>
            <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>startTime</td>
                <td>{{$kwDetail['startTime']}}</td>
            </tr>
            <tr data-parent={{"kwDetail".$kwDetail['kwDetailId']}}>
                <td></td>
                <td></td>
                <td>{{$kwDetail['kwDetailId']}}</td>
                <td>image</td>
                <td><img src="{{$kwDetail['image']}}" width=800></img></td>
            </tr>
        <?php }}} ?>
</table>
</body>
</html>
<body>
<?php dd($tests)?>