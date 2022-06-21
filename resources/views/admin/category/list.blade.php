@extends('admin.main')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Update</th>
            <th style="width: 100px">&nbsp;&nbsp;</th>
        </tr>
        </thead>
        <tbody>
        {!! \App\Helpers\Helper::category($categories) !!}
        </tbody>
    </table>
@endsection
