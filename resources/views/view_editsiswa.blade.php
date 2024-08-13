<html>

<body>
    <h2>Edit Siswa</h2>
    <form method="post" action="{{ url('siswa/edit') }}">
        @csrf
        <input type="hidden" name="id" value="{{ $siswa->id }}"><br><br>
        <input type="text" name="nis" value="{{ $siswa->nis }}"><br><br>
        <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}"><br><br>
        <input type="text" name="TTL" value="{{ $siswa->TTL }}"><br><br>
        <input type="text" name="kelas" value="{{ $siswa->kelas }}"><br><br>
        <input type="text" name="jurusan" value="{{ $siswa->TTL }}"><br><br>
        <input type="text" name="angkatan" value="{{ $siswa->angkatan }}"><br><br>
        <input type="submit" value="proses">
    </form>

    <body>

</html>
