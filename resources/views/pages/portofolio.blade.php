@extends('pages.app')

@section('title', 'Beranda')
@section('head')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')
    <div class="container mt-4 bg-white shadow-sm rounded-3 p-4">
        <div class="mb-1 d-flex justify-content-between align-items-center">
            <h4 class="fw-bold">Data Portofolio</h4>
            <a href="{{ url('/portofolio/create') }}" class="btn btn-outline-primary">Tambah</a>
        </div>
        <div class="row g-3">
            <div class="table-responsive">
                <table id="portfolio-table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Proyek</th>
                            <th>Deskripsi</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portofolio as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->title }}</td>
                                <td>{{ $data->sort_desc }}</td>
                                <td>{{ $data->date }}</td>
                            </tr>
                        @endforeach
                    </tbody>

            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#portfolio-table').DataTable();
        });
    </script>
@endpush
