<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
    <h2>View Siswa | <a href="{{ url('siswa/create') }}">Input</h2></a>
    <h2>
        <table border=2 class="table">
            <tr class="table-light ">
                <th>Nim</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>TTL</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ $siswa->nis }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->alamat }}</td>
                    <td>{{ $siswa->TTL }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->jurusan }}</td>
                    <td>{{ $siswa->angkatan }}</td>
                    <td>
                        <a href="{{ url('siswa') . '/' . $siswa->id . '/edit' }}">Edit</a>&nbsp;&nbsp;&nbsp;
                        <a href="{{ url('siswa') . '/' . $siswa->id . '/delete' }}">Hapus</a>
                        </form>
                    </td>
                </tr>   
            @endforeach
        </table>
</body>

</html>
