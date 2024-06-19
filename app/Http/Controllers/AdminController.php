<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\gejala;
use App\Models\Penyakit;
use App\Models\basisaturan;
use App\Models\detailbasisaturan;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }


    public function gejala(Request $request)
    {
        // Get all gejala data without filtering
        $data = Gejala::all();
        return view('admin.gejala', ['data' => $data]);
    }

    public function tambahgejala()
    {
        // Menampilkan halaman tambah gejala
        return view('admin.tambahgejala');
    }

    public function posttambahgejala(Request $request)
    {
        // Validasi data yang diinputkan oleh pengguna
        $request->validate([
            
            'namagejala' => 'required'
            
        ]);
        //membuat objek baru
        $gejala = new gejala;
        
        //mengisi properti objek dengan data dari formulir
        $gejala->namagejala = $request->namagejala;

        //menyimpan
        $gejala->save();

        if ($gejala) {
            return back()->with('success', 'gejala baru berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function editgejala($id)
    {
        // Mengambil data gejala yang akan diedit berdasarkan ID
        $data = gejala::find($id);

        // Menampilkan halaman edit gejala dengan data gejala yang dipilih
        return view('admin.editgejala', compact('data'));
    }

     public function posteditgejala(Request $request, $id)
    {
        // Validasi data yang diinputkan oleh pengguna untuk edit gejala
        $request->validate([
            
            'namagejala' => 'required'
           
        ]);

        // Mengambil data gejala yang akan diedit berdasarkan ID
        $gejala = gejala::find($id);

         $gejala->namagejala = $request->namagejala;


        // Menyimpan objek gejala yang sudah diubah ke database
        $gejala->save();

        // Mengembalikan pesan ke halaman sebelumnya
        if ($gejala) {
            return redirect('/admin/gejala')->with('success', 'gejala berhasil diupdate!');
        } else {
            return back()->with('failed', 'gejala gagal diupdate!');
        }
    }

    public  function hapusgejala($id)
    {
        // Mengambil data gejala yang akan dihapus berdasarkan ID
        $gejala = gejala::find($id);

        // Menghapus gambar yang terkait dengan gejala
    

        // Menghapus data gejala dari database
        $gejala->delete();

        // Mengembalikan pesan ke halaman sebelumnya
        if ($gejala) {
            return redirect('/admin/gejala')->with('success', 'Data gejala berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data gejala!');
        }
    }

   public function penyakit()
{
    $data = Penyakit::all(); // Ambil semua data penyakit
    return view('admin.penyakit', ['data' => $data]); // Kirim data ke view
}

    public function tambahpenyakit()
    {
        // Menampilkan halaman tambah penyakit
        return view('admin.tambahpenyakit');
    }

    public function posttambahpenyakit(Request $request)
    {
        // Validasi data yang diinputkan oleh pengguna
        $request->validate([
            'namapenyakit' => 'required',
            'keterangan' => 'required',
            'solusi' => 'required'
        ]);
        //membuat objek baru
        $penyakit = new penyakit;
        //mengisi properti objek dengan data dari formulir
        $penyakit->namapenyakit = $request->namapenyakit;
        $penyakit->keterangan = $request->keterangan;
        $penyakit->solusi = $request->solusi;

        //menyimpan
        $penyakit->save();

        if ($penyakit) {
            return back()->with('success', 'penyakit baru berhasil ditambahkan!');
        } else {
            return back()->with('failed', 'Data gagal ditambahkan!');
        }
    }

    public function editpenyakit($id)
{
    // Mengambil data Penyakit yang akan diedit berdasarkan ID
    $data = Penyakit::find($id);

    if (!$data) {
        return back()->with('failed', 'Data penyakit tidak ditemukan!');
    }

    // Menampilkan halaman edit Penyakit dengan data Penyakit yang dipilih
    return view('admin.editpenyakit', compact('data'));
}

     public function posteditPenyakit(Request $request, $id)
    {
        // Validasi data yang diinputkan oleh pengguna untuk edit penyakit
        $request->validate([
            
            'namapenyakit' => 'required',
            'keterangan' => 'required',
            'solusi' => 'required'
           
        ]);

        // Mengambil data penyakit yang akan diedit berdasarkan ID
        $penyakit = penyakit::find($id);

         $penyakit->namapenyakit = $request->namapenyakit;
        $penyakit->keterangan = $request->keterangan;
        $penyakit->solusi = $request->solusi;


        // Menyimpan objek penyakit yang sudah diubah ke database
        $penyakit->save();

        // Mengembalikan pesan ke halaman sebelumnya
        if ($penyakit) {
            return redirect('/admin/penyakit')->with('success', 'penyakit berhasil diupdate!');
        } else {
            return back()->with('failed', 'penyakit gagal diupdate!');
        }
    }

    public function hapuspenyakit($id)
    {
        // Mengambil data penyakit yang akan dihapus berdasarkan ID
        $penyakit = penyakit::find($id);

        // Menghapus gambar yang terkait dengan penyakit
    

        // Menghapus data penyakit dari database
        $penyakit->delete();

        // Mengembalikan pesan ke halaman sebelumnya
        if ($penyakit) {
            return redirect('/admin/penyakit')->with('success', 'Data penyakit berhasil dihapus!');
        } else {
            return back()->with('failed', 'Gagal menghapus data penyakit!');
        }
    }

    public function viewDataPenyakit(Request $request)
{
    // Misalnya, ambil data penyakit dari model Penyakit
    $data = Penyakit::all();

    // Kemudian kirim data tersebut ke tampilan HTML
    return view('nama_view', compact('data')); // Sesuaikan 'nama_view' dengan nama view Anda
}



public function basisaturan(Request $request)
{
    $data = basisaturan::paginate(5);
    $databasisaturan = DB::table('basisaturans')
        ->join('penyakits', 'basisaturans.penyakit_id', '=', 'penyakits.id') 
        ->select(
            'basisaturans.id',
            'penyakits.namapenyakit', 
            'penyakits.keterangan')
        ->get();
    return view('admin.basisaturan', ['data' => $databasisaturan, ]); // Kirim data dengan nama 'data'
}

public function detailbasisaturan(Request $request, $id)
{
    // Paginate the 'basisaturan' table
    $data = Basisaturan::find($id);
    // Query to get detailed 'basisaturan' data for the selected id
    $datadetailbasisaturan = DB::table('detailbasisaturans') 
        ->join('basisaturans', 'detailbasisaturans.basisaturan_id', '=', 'basisaturans.id')
        ->join('gejalas', 'detailbasisaturans.gejala_id', '=', 'gejalas.id')
        ->join('penyakits', 'basisaturans.penyakit_id', '=', 'penyakits.id') // Join dengan table penyakits
        ->where('detailbasisaturans.basisaturan_id', $id) // Filter berdasarkan id yang dipilih
        ->select(
            'detailbasisaturans.id',
            'detailbasisaturans.gejala_id',
            'detailbasisaturans.basisaturan_id',
            'penyakits.namapenyakit',
            'penyakits.keterangan',
            'gejalas.namagejala'
        )
        ->get();
    // Return the view with the data
    return view('admin.detailbasisaturan', [
        'data' => $datadetailbasisaturan,
        'basisaturans' => Basisaturan::all(),
    ]);
}


public function tambahbasisaturan()
{
    // Mengambil data semua penyakit
    $dataPenyakit = Penyakit::all();
    $dataGejala = Gejala::all();

    return view('admin.tambahbasisaturan', ['dataPenyakit' => $dataPenyakit, 'dataGejala' => $dataGejala]);
}
public function posttambahbasisaturan(Request $request)
{
    // Validasi data yang diinputkan oleh pengguna
    $request->validate([
        'penyakit_id' => 'required|exists:penyakits,id',
        'gejala_id' => 'required|array',
        'gejala_id.*' => 'exists:gejalas,id', // Validasi untuk setiap elemen dalam array gejala_id
    ]);

    // Pastikan hanya satu penyakit_id yang dipilih
    $penyakit_id = $request->penyakit_id[0];

    // Mengambil data penyakit berdasarkan id yang dipilih
    $penyakit = Penyakit::findOrFail($penyakit_id);
    // Cek apakah sudah ada basisaturan dengan penyakit yang sama
    $existingBasisaturan = Basisaturan::where('penyakit_id', $request->penyakit_id)->first();

    if ($existingBasisaturan) {
        return back()->with('failed', 'Basisaturan untuk penyakit ini sudah ada!');
    }

    // Simpan basisaturan baru
    $basisaturan = new Basisaturan;
    $basisaturan->penyakit_id = $penyakit_id; 
    $basisaturan->save();

    // Jika basisaturan berhasil disimpan
    if ($basisaturan) {
        // Simpan detailbasisaturan untuk setiap gejala yang dipilih
        foreach ($request->gejala_id as $gejalaId) {
            $detailbasisaturan = [
                'gejala_id' => $gejalaId,
                'basisaturan_id' => $basisaturan->id
            ];

            DB::table('detailbasisaturans')->insert($detailbasisaturan);
        }

        return back()->with('success', 'Basis Aturan baru berhasil ditambahkan!');
    } else {
        return back()->with('failed', 'Data gagal ditambahkan!');
    }
}




public function editbasisaturan($id)
{
    // Mengambil data Basisaturan yang akan diedit berdasarkan ID
    $data = Basisaturan::find($id);
    $dataPenyakit = Penyakit::all(); // Mengambil data penyakit untuk dropdown
    $dataGejala = Gejala::all(); // Mengambil data gejala untuk checkbox

    // Menampilkan halaman edit Basisaturan dengan data Basisaturan yang dipilih
    return view('admin.editbasisaturan', compact('data', 'dataPenyakit', 'dataGejala'));
}

public function posteditbasisaturan(Request $request, $id)
{
    // Validasi data yang diinputkan oleh pengguna untuk edit Basisaturan
    $request->validate([
        'penyakit_id' => 'required|exists:penyakits,id',
        'gejala_id' => 'required|array',
        'gejala_id.*' => 'exists:gejalas,id', // Validasi untuk setiap elemen dalam array gejala_id
    ]);

    // Mengambil data Basisaturan yang akan diedit berdasarkan ID
    $basisaturan = Basisaturan::find($id);

    // Mengisi properti objek dengan data dari formulir
    $basisaturan->penyakit_id = $request->penyakit_id;
    // tambahkan pengisian properti lainnya sesuai kebutuhan

    // Menyimpan objek Basisaturan yang sudah diubah ke database
    $basisaturan->save();

    // Hapus semua detailbasisaturan yang terkait dengan basisaturan yang diedit
    DB::table('detailbasisaturans')->where('basisaturan_id', $basisaturan->id)->delete();

    // Simpan kembali detailbasisaturan untuk setiap gejala yang dipilih
    foreach ($request->gejala_id as $gejalaId) {
        $detailbasisaturan = [
            'gejala_id' => $gejalaId,
            'basisaturan_id' => $basisaturan->id
        ];

        DB::table('detailbasisaturans')->insert($detailbasisaturan);
    }

    return redirect()->route('admin.basisaturan')->with('success', 'Basis Aturan berhasil diupdate!');
}
public function hapusbasisaturan($id)
{
    // Temukan basisaturan berdasarkan ID
    $basisaturan = Basisaturan::find($id);

    // Jika basisaturan tidak ditemukan
    if (!$basisaturan) {
        return redirect()->route('admin.basisaturan')->with('failed', 'Basisaturan tidak ditemukan.');
    }

    // Menghapus basisaturan dan relasinya (jika ada)
    DB::beginTransaction();
    try {
        // Hapus detailbasisaturan yang terkait
        $basisaturan->detailbasisaturans()->delete();

        // Hapus basisaturan itu sendiri
        $basisaturan->delete();

        DB::commit();
        return redirect()->route('admin.basisaturan')->with('success', 'Basisaturan berhasil dihapus.');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->route('admin.basisaturan')->with('failed', 'Terjadi kesalahan saat menghapus basisaturan.');
    }
}

}