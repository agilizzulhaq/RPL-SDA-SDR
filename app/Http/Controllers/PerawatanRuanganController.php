<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Lokasi;
use App\Models\Pengguna;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\PerawatanRuangan;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\CekUserLogin;
use Illuminate\Http\RedirectResponse;

class PerawatanRuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $keyword = '%' . request('keyword') . '%';

        $perawatanruangan = DB::table('perawatan_ruangans')
            ->join('rooms', 'perawatan_ruangans.kodeRuangan', '=', 'rooms.kodeRuangan')
            ->join('lokasi', 'rooms.lokasiRuangan', '=', 'lokasi.kode_lokasi')
            ->select(
                'rooms.kodeRuangan',
                'rooms.namaRuangan',
                'lokasi.nama_gedung',
                'lokasi.lantai',
                'perawatan_ruangans.id_perawatan',
                'perawatan_ruangans.statusPerawatan',
                'perawatan_ruangans.history',
                'perawatan_ruangans.kondisi',
            )
            ->where('rooms.namaRuangan', 'like', $keyword)
            ->orWhere('lokasi.nama_gedung', 'like', $keyword)
            ->orWhere('lokasi.lantai', 'like', $keyword)
            ->orWhere('perawatan_ruangans.kondisi', 'like', $keyword)
            ->orWhere('perawatan_ruangans.statusPerawatan', 'like', $keyword)
            ->paginate(10);

        // $room = Room::all();
        // $lokasi = Lokasi::all();

        // $perawatanruangan = PerawatanRuangan::paginate(10);
        return view('perawatanruangan.index', compact('perawatanruangan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $room = Room::all();
        return view('perawatanruangan.create', compact('room'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_perawatan' => 'required',
            'kodeRuangan' => 'required',
            'kondisi' => 'required',
            'history',
            'statusPerawatan' => 'required',
        ]);

        PerawatanRuangan::create($request->all());

        return redirect()->route('perawatanruangan.index')
            ->with('success', 'Data perawatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(PerawatanRuangan $perawatanruangan): View
    {
        return view('perawatanruangan.show', compact('perawatanruangan'));
    }

    /**
     * Show the form for editing the specified resource.
     */

     public function __construct()
     {
        //  $this->middleware(CekUserLogin::class . ':1,2')->only(['create', 'store']);
         $this->middleware(CekUserLogin::class . ':2')->only(['edit', 'destroy','update']);
     }

    public function edit(PerawatanRuangan $perawatanruangan): View
    {
        $room = Room::all();
        $pengguna = Pengguna::all();
        return view('perawatanruangan.edit', compact('perawatanruangan', 'room', 'pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerawatanRuangan $perawatanruangan): RedirectResponse
    {
        $request->validate([
            'id_perawatan' => 'required',
            'kodeRuangan' => 'required',
            'kondisi' => 'required',
            'history',
            'statusPerawatan' => 'required',
        ]);

        $perawatanruangan->update($request->all());

        return redirect()->route('perawatanruangan.index')
            ->with('success', 'Data perawatan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerawatanRuangan $perawatanruangan): RedirectResponse
    {
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $perawatanruangan->delete();

        return redirect()->route('perawatanruangan.index')
            ->with('success', 'Data telah berhasil dihapus')
            ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
    }
}
