<html>
<body>
<h2>Input Siswa</h2>
<form method="post" action="{{url('siswa/create')}}">
@csrf
<input type="text" name="nis" placeholder="nis"><br><br>
<input type="text" name="nama" placeholder="Nama"><br><br>
<input type="text" name="alamat" placeholder="Alamat"><br><br>
<input type="text" name="TTL" placeholder="TTL"><br><br>
<input type="text" name="kelas" placeholder="kelas"><br><br>
<input type="text" name="jurusan" placeholder="jurusan"><br><br>
<input type="text" name="angkatan" placeholder="angkatan"><br><br>
<input type="submit" value="proses">
</form>
<body>