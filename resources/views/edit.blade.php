<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.sukasukaane.com</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
    <div class="container">
	<h2><a href="">www.sukasukaane.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>
	
	<br/>
    <br/>
      {{-- menampilkan error validasi --}}
      @if (count($errors) > 0)
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
      @endif
    <div class="table table-borderless"> 
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <table border="0">
	<tr><td>Nama    : </td><td><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> </td></tr>
    <tr><td>Jabatan : </td><td><input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> </td></tr>
    <tr><td>Email : </td><td><input type="text" required="required" name="email" value="{{ $p->pegawai_email }}"> </td></tr>
    <tr><td>Umur    : </td><td><input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> </td></tr>
    <tr><td>Alamat  : </td><td><textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> </td></tr>
    <tr><td><input type="submit" value="Simpan Data" class="btn btn-primary ml-3"></td></tr>
        </table>
	</form>
	@endforeach
    </div>
    </div>

</body>
</html>