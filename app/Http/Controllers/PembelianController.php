<?php
  
namespace App\Http\Controllers;

//namespace App\Http\Controllers\Admin;

use App\Models\Pembelian;
use App\Models\NamaAlat;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\CekUserLogin;
  
class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $pembelians = Pembelian::with('NamaAlat')
                    ->join('nama_alat', 'pembelians.nama_alat', '=', 'nama_alat.kode_nama_alat')
                    ->join('vendors', 'pembelians.vendor', '=', 'vendors.id_vendor')
                    ->select(
                        'nama_alat.nama_alat',
                        'vendors.nama_vendor',
                        'pembelians.id_pembelian',
                        'pembelians.tanggal_pembelian',
                        'pembelians.harga_satuan',
                        'pembelians.jumlah_pembelian',
                        'pembelians.keterangan',
                        'pembelians.status',
                    )
                    ->latest('pembelians.created_at')
                    ->paginate(10);

        $nama_alat = NamaAlat::all();
        $vendor = Vendor::all();
        
        return view('pembelian.index',compact('pembelians', 'nama_alat', 'vendor'))
                    ->with('i', (request()->input('page', 1) - 1) * 10);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $nama_alat = NamaAlat::all();
        $vendor = Vendor::all();
        return view('pembelian.create', compact('nama_alat', 'vendor'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id_pembelian' => 'required',
            'nama_alat' => 'required',
            'tanggal_pembelian',
            'vendor' => 'required',
            'harga_satuan' => 'required',
            'jumlah_pembelian' => 'required',
            'keterangan' => 'required',
            'status' => 'required',
        ]);
        
        Pembelian::create($request->all());
         
        return redirect()->route('pembelian.index')
                        ->with('success','Pembelian created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Pembelian $pembelian): View
    {
        return view('pembelian.show',compact('pembelian'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function __construct()
    {
        $this->middleware(CekUserLogin::class . ':2')->only(['edit', 'destroy','update']);
        // $this->middleware(CekUserLogin::class . ':1,2')->only(['create', 'store']);
    }

    public function edit($id): View
    {
        $pembelian = Pembelian::where('id_pembelian', $id)->first();
        $nama_alat = NamaAlat::all();
        $vendor = Vendor::all();
        return view('pembelian.edit',compact('pembelian', 'nama_alat', 'vendor'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $pembelian = Pembelian::where('id_pembelian', $id);
        $pembelian->update([
            'id_pembelian' => $request->id_pembelian,
            'nama_alat' => $request->nama_alat,
            'tanggal_pembelian' => $request->tanggal_pembelian,
            'vendor' => $request->vendor,
            'harga_satuan' => $request->harga_satuan,
            'jumlah_pembelian' => $request->jumlah_pembelian,
            'keterangan' => $request->keterangan,
            'status' => $request->status,
        ]);

        return redirect()->route('pembelian.index')
                        ->with('success','Pembelian updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $pembelian = Pembelian::where('id_pembelian', $id);
        $pembelian->delete();

        return redirect()->route('alat') -> with('success','Data berhasil dihapus');
    }
}