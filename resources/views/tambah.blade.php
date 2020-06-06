<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.sukasukaane.com</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
<div class="container">
    <h2 class="text-center"><a href="">www.sukasukaane.com</a></h2>
	<h3>Tambah Data Pegawai</h3>
	<a href="/pegawai"> Kembali</a>
	
	<br/>
    <br/>
    
 <div class="table table-borderless"> 
	<form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <table border="0">
            <tr><td>Nama    :</td><td><input type="text" name="nama" required="required"></td></tr>
		    <tr><td>Jabatan :</td><td><input type="text" name="jabatan" required="required"> </td></tr>
		    <tr><td>Umur    :</td><td><input type="number" name="umur" required="required"> </td></tr>
            <tr><td>Alamat  :</td><td><textarea name="alamat" required="required"></textarea> </td></tr>
            <tr><td><input type="submit" value="Simpan Data" class="btn btn-primary ml-3"></td>
                <td><input type="reset" Value="Clear" class="btn btn-primary ml-3"></td>
            </tr>
        </table>
	</form>
</div>

</div>
	
</body>
</html>