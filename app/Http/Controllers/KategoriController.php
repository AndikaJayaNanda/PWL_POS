<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable) {
       /* $data = [
            'kategori_kode' => 'SNK',
            'kategori_nama' => 'Snack/Makanan Ringan',
            'created_at' => now()
        ];
        DB::table('m_kategori')->insert($data);
        return 'Insert data baru berhasil';

        $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama'=>'Camilan']);
        return 'Update data berhasil. Jumlah data yang diupdate : '.$row.' baris';
        
        $row = DB::table('m_kategori')->where('kategori_kode','SNK')->delete();
        return 'Delete data berhasil. Jumlah data yang dihapus : '.$row.' baris';
        
        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]); */
        
        return $dataTable->render('kategori.index');
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request) {
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    public function edit($id){
        $data = KategoriModel::find($id);
        if (!$data) {
            return redirect('/kategori')->with('error', 'Kategori tidak ditemukan.');
        }
        return view('kategori.editkategori', ['data' => $data]);
    }
    
    public function hapus($id){
        $data = KategoriModel::find($id);
        if (!$data) {
            return redirect('/kategori')->with('error', 'Kategori tidak ditemukan.');
        }
        $data->delete();
        return redirect('/kategori');
    }
    public function update($id, Request $request)
    {
        $kategori= KategoriModel::find($id);

        $kategori->kategori_kode = $request->kategori_kode;
        $kategori->kategori_nama = $request->kategori_nama;

        $kategori->save();
        return redirect('/kategori');
    }

}
