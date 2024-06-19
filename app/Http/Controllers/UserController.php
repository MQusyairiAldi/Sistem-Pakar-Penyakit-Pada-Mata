<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\detailpenyakit;
use App\Models\Konsultasi;
use App\Models\basisaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DetailKonsultasi;

class UserController extends Controller
{
    public function konsultasiuser()
    {
        $dataGejala = Gejala::all();
        return view('user.konsultasiuser')->with('dataGejala', $dataGejala);
    }

    public function hasilKonsultasi($idkonsultasi)
    {
        $konsultasi = Konsultasi::findOrFail($idkonsultasi);
        $detailPenyakits = DB::table('detailpenyakits')
            ->join('penyakits', 'detailpenyakits.penyakit_id', '=', 'penyakits.id')
            ->where('detailpenyakits.konsultasi_id', $idkonsultasi)
            ->select('penyakits.namapenyakit','penyakits.solusi', 'detailpenyakits.presentase')
            ->get();
            
        return view('user.hasilkonsultasi', compact('konsultasi', 'detailPenyakits'));
    }
        
    public function prosesKonsultasi(Request $request)
{
    $validatedData = $request->validate([
        'nama' => 'required',
        'idgejala' => 'required|array',
    ]);

    $nama = $validatedData['nama'];
    $tanggal = date("Y/m/d");

    // Mulai transaksi database
    DB::transaction(function () use ($validatedData, $nama, $tanggal) {
        // Simpan data konsultasi
        $idkonsultasi = DB::table('konsultasis')->insertGetId([
            'nama' => $nama,
            'tanggal' => $tanggal,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Simpan detail konsultasi
        $detailKonsultasiData = [];
        foreach ($validatedData['idgejala'] as $idgejala) {
            $detailKonsultasiData[] = [
                'konsultasi_id' => $idkonsultasi,
                'gejala_id' => $idgejala,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('detailkonsultasis')->insert($detailKonsultasiData);

        // Ambil basisaturan dan detailbasisaturan
        $basisaturans = DB::table('basisaturans')->get();
        $detailbasisaturans = DB::table('detailbasisaturans')->get();

        // Hitung persentase penyakit dan simpan ke detailpenyakits
        $detailPenyakitData = [];
        $penyakitLikelihood = [];

        $totalMatchCount = 0;
        foreach ($basisaturans as $basisaturan) {
            $gejalaPenyakitIDs = $detailbasisaturans
                ->where('basisaturan_id', $basisaturan->id)
                ->pluck('gejala_id')
                ->toArray();

            $matchCount = count(array_intersect($gejalaPenyakitIDs, $validatedData['idgejala']));
            $totalMatchCount += $matchCount;
        }

        foreach ($basisaturans as $basisaturan) {
            $gejalaPenyakitIDs = $detailbasisaturans
                ->where('basisaturan_id', $basisaturan->id)
                ->pluck('gejala_id')
                ->toArray();

            $matchCount = count(array_intersect($gejalaPenyakitIDs, $validatedData['idgejala']));
            $totalGejalaPenyakit = count($gejalaPenyakitIDs);
            
            // Persentase dihitung dari total match count
            $percentage = ($totalMatchCount > 0) ? ($matchCount / $totalMatchCount) * 100 : 0;

            if ($percentage > 0) {
                $detailPenyakitData[] = [
                    'konsultasi_id' => $idkonsultasi,
                    'penyakit_id' => $basisaturan->penyakit_id,
                    'presentase' => $percentage,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            $penyakitLikelihood[] = [
                'penyakit' => DB::table('penyakits')->where('id', $basisaturan->penyakit_id)->value('namapenyakit'),
                'percentage' => $percentage,
            ];
        }
        DB::table('detailpenyakits')->insert($detailPenyakitData);

        // Redirect ke halaman hasil konsultasi
        redirect()->route('user.hasilkonsultasi', ['idkonsultasi' => $idkonsultasi])->send();
    });

    // Jika transaksi gagal, tangani error dengan mengembalikan pesan error kepada user
    return back()->withErrors('Terjadi kesalahan. Silakan coba lagi nanti.');
}
 public function info()
    {
        return view('user.info');
    }



    // public function prosesKonsultasi(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama' => 'required',
    //         'idgejala' => 'required|array',
    //     ]);
    
    //     $nama = $validatedData['nama'];
    //     $tanggal = date("Y/m/d");
    
    //     // Mulai transaksi database
    //     DB::transaction(function () use ($validatedData, $nama, $tanggal) {
    //         // Simpan data konsultasi
    //         $idkonsultasi = DB::table('konsultasis')->insertGetId([
    //             'nama' => $nama,
    //             'tanggal' => $tanggal,
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]);
    
    //         // Simpan detail konsultasi
    //         $detailKonsultasiData = [];
    //         foreach ($validatedData['idgejala'] as $idgejala) {
    //             $detailKonsultasiData[] = [
    //                 'konsultasi_id' => $idkonsultasi,
    //                 'gejala_id' => $idgejala,
    //                 'created_at' => now(),
    //                 'updated_at' => now(),
    //             ];
    //         }
    //         DB::table('detailkonsultasis')->insert($detailKonsultasiData);
    
    //         // Ambil basisaturan dan detailbasisaturan
    //         $basisaturans = DB::table('basisaturans')->get();
    //         $detailbasisaturans = DB::table('detailbasisaturans')->get();
    
    //         // Hitung persentase penyakit dan simpan ke detailpenyakits
    //         $detailPenyakitData = [];
    //         $penyakitLikelihood = [];
    
    //         foreach ($basisaturans as $basisaturan) {
    //             $gejalaPenyakitIDs = $detailbasisaturans
    //                 ->where('basisaturan_id', $basisaturan->id)
    //                 ->pluck('gejala_id')
    //                 ->toArray();
    
    //             $matchCount = count(array_intersect($gejalaPenyakitIDs, $validatedData['idgejala']));
    //             $totalGejalaPenyakit = count($gejalaPenyakitIDs);
    //             $percentage = ($matchCount / $totalGejalaPenyakit) * 100;
    
    //             if ($percentage > 0) {
    //                 $detailPenyakitData[] = [
    //                     'konsultasi_id' => $idkonsultasi,
    //                     'penyakit_id' => $basisaturan->penyakit_id,
    //                     'presentase' => $percentage,
    //                     'created_at' => now(),
    //                     'updated_at' => now(),
    //                 ];
    //             }
    
    //             $penyakitLikelihood[] = [
    //                 'penyakit' => DB::table('penyakits')->where('id', $basisaturan->penyakit_id)->value('namapenyakit'),
    //                 'percentage' => $percentage,
    //             ];
    //         }
    //         DB::table('detailpenyakits')->insert($detailPenyakitData);
    
    //         // Redirect ke halaman hasil konsultasi
    //         return redirect()->route('user.hasilkonsultasi', ['idkonsultasi' => $idkonsultasi]);
    //     });
    
    //     // Jika transaksi gagal, tangani error dengan mengembalikan pesan error kepada user
    //     return back()->withErrors('Terjadi kesalahan. Silakan coba lagi nanti.');
    // }
}