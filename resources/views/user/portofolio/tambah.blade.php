<!DOCTYPE html>
<html>
<head>
    <title>Tambah Portofolio</title>
</head>
<body>
    <h1>Tambah Portofolio</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('portofolio.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Judul</label><br>
        <input type="text" name="title"><br><br>

        <label>Deskripsi Singkat</label><br>
        <textarea name="sort_desc"></textarea><br><br>

        <label>Kategori</label><br>
        <input type="text" name="category"><br><br>

        <label>Instansi</label><br>
        <input type="text" name="instansi"><br><br>

        <label>Client</label><br>
        <input type="text" name="client"><br><br>

        <label>Tanggal</label><br>
        <input type="date" name="date"><br><br>

        <label>URL (opsional)</label><br>
        <input type="text" name="url"><br><br>

        <label>Head Deskripsi</label><br>
        <textarea name="head_desc"></textarea><br><br>

        <label>Deskripsi</label><br>
        <textarea name="desc"></textarea><br><br>

        <label>Gambar (bisa lebih dari satu)</label><br>
        <input type="file" name="img[]" multiple><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
