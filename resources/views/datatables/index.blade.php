<!DOCTYPE html>
<html>
<head>
    <title>Datatables implementation in laravel - justlaravel.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="//code.jquery.com/jquery-1.12.3.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script
            src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <script
            src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
</style>
<body>
<table class="table table-borderless" id="table">
    <thead>
    <tr>
        <th class="text-center">suiteId</th>
        <th class="text-center">source</th>
        <th class="text-center">id</th>
        <th class="text-center">name</th>
        <th class="text-center">status</th>
        <th class="text-center">endTime ($)</th>
        <th class="text-center">startTime</th>
        <th class="text-center">action</th>
    </tr>
    </thead>
    @foreach($data as $item)
        <tr class="item{{$item->suiteId}}">
            <td>{{$item->suiteId}}</td>
            <td>{{$item->source}}</td>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->status}}</td>
            <td>{{$item->endTime}}</td>
            <td>{{$item->startTime}}</td>
            <td><button class="edit-modal btn btn-info"
                        data-info="{{$item->suiteId}}">
                    <span class="glyphicon glyphicon-share-alt"></span> Detail
                </button>
        </tr>
    @endforeach
</table>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
<script>
    $(document).on('click', '.edit-modal', function() {
        window.open('/report/' + $(this).data('info'), '_blank');
    });
</script>