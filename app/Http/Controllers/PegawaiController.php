<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
	public function index()
	{
    		// mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->paginate(25);

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}

	public function tambah()
	{
		return view ('tambah');
	}

	public function store(Request $request)
	{
		DB::table('pegawai')->insert([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

		return \redirect("/pegawai");
	}

	public function edit($id)
	{
		$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();

		return \view('edit',['pegawai' => $pegawai]);
	}

	public function update(Request $request)
	{
		DB::table('pegawai')->where('pegawai_id',$request->id)->update([
			'pegawai_nama' => $request->nama,
			'pegawai_jabatan' => $request->jabatan,
			'pegawai_umur' => $request->umur,
			'pegawai_alamat' => $request->alamat
		]);

		return \redirect('/pegawai');
	}

	public function hapus($id)
	{
		DB::table('pegawai')->where('pegawai_id',$id)->delete();

		return \redirect('/pegawai');
	}

}