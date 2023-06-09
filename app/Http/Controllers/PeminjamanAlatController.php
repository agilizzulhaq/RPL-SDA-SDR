<?php

namespace App\Http\Controllers;

use App\Models\PeminjamanAlat;
use App\Models\NamaAlat;
use App\Models\Inventory;
use App\Models\Pengguna;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\CekUserLogin;
use Illuminate\Support\Facades\Auth;
class PeminjamanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $keyword = '%' . request('keyword') . '%';

        $peminjaman_alat = DB::table('peminjaman_alat')
                    ->join('penggunas', 'peminjaman_alat.nama_peminjam', '=', 'penggunas.id_user')
                    ->join('inventories', 'peminjaman_alat.kode_alat', '=', 'inventories.kodeAlat')
                    ->join('nama_alat', 'inventories.namaAlat', '=', 'nama_alat.kode_nama_alat')
                    ->select(
                        'nama_alat.nama_alat',
                        'inventories.namaAlat',
                        'penggunas.nama_user',
                        'peminjaman_alat.kode_alat',
                        'peminjaman_alat.id_peminjaman',
                        'peminjaman_alat.tanggal_peminjaman',
                        'peminjaman_alat.tanggal_pengembalian',
                        'peminjaman_alat.status_peminjaman',
                        'peminjaman_alat.alasan_peminjaman'
                    )
                    ->where('nama_alat.nama_alat', 'like', $keyword)
                    ->orWhere('penggunas.nama_user', 'like', $keyword)
                    ->orWhere('peminjaman_alat.status_peminjaman', 'like', $keyword)
                    ->orWhere('peminjaman_alat.alasan_peminjaman', 'like', $keyword)
                    ->latest('peminjaman_alat.created_at')
                    ->paginate(10);

        $inventory = Inventory::all();
        $pengguna = Pengguna::all();
       
        return view('peminjaman_alat.index',compact('peminjaman_alat'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $inventory = Inventory::all();
        $namaalat = NamaAlat::all();
        $pengguna = Pengguna::all();
        return view('peminjaman_alat.create', compact('inventory', 'namaalat', 'pengguna'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'id_peminjaman' => 'required',
            'kode_alat' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian',
            'status_peminjaman' => 'required',
            'alasan_peminjaman' => 'required',
        ]);
        
        PeminjamanAlat::create($request->all());
        $inventory = Inventory::all();
         
        return redirect()->route('peminjaman_alat.index')
                        ->with('success','Data pinjam berhasil ditambahkan');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(PeminjamanAlat $peminjaman_alat): View
    {
        return view('peminjaman_alat.show',compact('peminjaman_alat'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    // public function __construct()
    // {
    //     $this->middleware(CekUserLogin::class . ':2,3')->only(['edit', 'destroy','update']);
    //     // $this->middleware(CekUserLogin::class . ':1,2,3')->only(['create', 'store']);
    // }
    
    public function edit(PeminjamanAlat $peminjaman_alat): View
    {
        $user = Auth::user();
        if ($user->level == 2 || $user->level == 3){
        $inventory = Inventory::all();
        $namaalat = NamaAlat::all();
        $pengguna = Pengguna::all();
        return view('peminjaman_alat.edit',compact('peminjaman_alat', 'inventory', 'namaalat', 'pengguna'));
        }
        else {
            // Redirect or display an error message
            return redirect('login')->with('error', 'Anda tidak memiliki akses');
        }
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeminjamanAlat $peminjaman_alat): RedirectResponse
    {
        $user = Auth::user();
        if ($user->level == 2 || $user->level == 3){
        $request->validate([
            'id_peminjaman' => 'required',
            'kode_alat' => 'required',
            'nama_peminjam' => 'required',
            'tanggal_peminjaman' => 'required',
            'tanggal_pengembalian',
            'status_peminjaman' => 'required',
            'alasan_peminjaman' => 'required',
        ]);
        
        $peminjaman_alat->update($request->all());
        
        return redirect()->route('peminjaman_alat.index')
                        ->with('success','Data pinjam berhasil diperbarui');
        }
        else {
            // Redirect or display an error message
            return redirect('login')->with('error', 'Anda tidak memiliki akses');
        }
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeminjamanAlat $peminjaman_alat): RedirectResponse
    {
        $user = Auth::user();
        if ($user->level == 2 || $user->level == 3){
        $confirmDelete = true; // tambahkan variabel untuk menandai konfirmasi
        $peminjaman_alat->delete();

        return redirect()->route('peminjaman_alat.index')
                        ->with('success', 'Data telah berhasil dihapus')
                        ->with('confirmDelete', $confirmDelete); // tambahkan variabel ke session
        }
        else {
            // Redirect or display an error message
            return redirect('login')->with('error', 'Anda tidak memiliki akses');
        }
    }
}
