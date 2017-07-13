@extends('layouts.master')

@section('content')
    <table class="table table-bordered" id="users-table">
        <thead>
        <tr>
            <th>reportId</th>
            <th>source</th>
            <th>id</th>
            <th>name</th>
            <th>status</th>
            <th>endTime</th>
            <th>startTime</th>
        </tr>
        </thead>
    </table>
@stop

@push('scripts')
<script>
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatables.data') !!}',
            columns: [
                { data: 'reportId', name: 'reportId' },
                { data: 'source', name: 'source' },
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'status', name: 'status' },
                { data: 'endTime', name: 'endTime' },
                { data: 'startTime', name: 'startTime' }
            ]
        });
    });
</script>
@endpush