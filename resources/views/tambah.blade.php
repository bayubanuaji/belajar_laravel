<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.sukasukaane.com</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
<div class="container">
    <h2 class="text-center"><a href="">www.sukasukaane.com</a></h2>
	<h3>Data Pegawai</h3>
	<a href="/pegawai"> Kembali</a>
	
	<br/>
    <br/>
    
<div class="table table-bordered"> 
	<form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <tr class="form-inline">
        <p>
		<td>Nama    : <input type="text" name="nama" required="required"> </td> <br>
		<td>Jabatan : <input type="text" name="jabatan" required="required"> </td> <br>
		<td>Umur    : <input type="number" name="umur" required="required"> </td> <br>
        <td>Alamat  : <textarea name="alamat" required="required"></textarea> </td> <br>
        <input type="submit" value="Simpan Data" class="btn btn-primary ml-3">
    </p>
    </tr>
		</form>
</div>

</div>
	
</body>
</html>