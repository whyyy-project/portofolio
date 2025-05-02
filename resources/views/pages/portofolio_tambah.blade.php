@extends('pages.app')

@section('title', 'Tambah Portofolio')

@section('content')
<div class="container mt-4 bg-white shadow-sm rounded-3 p-4">
    <h3 class="mb-4">Tambah Portofolio</h3>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('portofolio.insert') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Judul Proyek</label>
            <input type="text" class="form-control" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="mb-3">
            <label for="sort_desc" class="form-label">Deskripsi Singkat</label>
            <input type="text" class="form-control" name="sort_desc" value="{{ old('sort_desc') }}" required>
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">Kategori</label>
            <input type="text" class="form-control" name="category" value="{{ old('category') }}" required>
        </div>

        <div class="mb-3">
            <label for="instansi" class="form-label">Instansi</label>
            <input type="text" class="form-control" name="instansi" value="{{ old('instansi') }}" required>
        </div>

        <div class="mb-3">
            <label for="client" class="form-label">Client</label>
            <input type="text" class="form-control" name="client" value="{{ old('client') }}" required>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Tanggal Proyek</label>
            <input type="text" class="form-control" name="date" value="{{ old('date') }}" required>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">URL Proyek (opsional)</label>
            <input type="url" class="form-control" name="url" value="{{ old('url') }}">
        </div>

        <div class="mb-3">
            <label for="head_desc" class="form-label">Headline Deskripsi</label>
            <textarea class="form-control" name="head_desc" rows="2" required>{{ old('head_desc') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Deskripsi Lengkap</label>
            <textarea class="form-control" name="desc" rows="4" required>{{ old('desc') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Upload Gambar (bisa lebih dari 1)</label>
            <input type="file" class="form-control" name="img[]" multiple accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
