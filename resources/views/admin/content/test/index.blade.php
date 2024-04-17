@extends('admin/layouts/contentNavbarLayout')

@section('page-style')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.dataTables.min.css">
@endsection

@section('title', 'Admin - Profile')

@section('content')
    <h1>hello</h1>
    {{ $dataTable->table() }}
@endsection

@section('page-script')
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.min.js"></script>
    {{ $dataTable->scripts() }}
@endsection
