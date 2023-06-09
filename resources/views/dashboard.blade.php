@extends('layout2.mainnew')


@section('isi')
<a href="{{ url('/') }}" style="text-decoration: none; color: inherit;">
    <div class="flex bg-[#5479f7] mt-16 w-[120px] h-[38px] rounded-lg text-[12px] text-[#fecbcf] font-bold justify-evenly items-center">
        <span class="material-icons" style="">home</span>
        Dashboard
    </div>
</a>
    <div class="grid grid-cols-4 gap-4 rounded mt-4 text-md font-bold text-[#fecbcf] w-full">
    <a href="{{ url('/sda/alat') }}" class="text-white" style="text-decoration: none; color: inherit;">
        <div class="bg-[#5479f7] flex gap-3 pl-5 justify-start items-center rounded-lg h-[110px]">
            <div class="h-[70px] w-[70px] rounded-sm bg-white flex justify-center items-center">
                <span class="material-icons text-black" style="font-size: 40px">inventory_2</span>
            </div>
            <div>
                <div class="self-center text-start">Jumlah Alat</div>
                <div class="self-center text-start">{{ $totalAlat }}</div>
            </div>
        </div>
    </a>
    <a href="{{ url('/sda/peminjaman_alat') }}" class="text-white" style="text-decoration: none; color: inherit;">
        <div class="bg-[#5479f7] flex gap-3 pl-5 justify-start items-center rounded-lg h-[110px]">
            
            <div class="h-[70px] w-[70px] rounded-sm bg-white flex justify-center items-center">
                <span class="material-icons text-black" style="font-size: 40px">handshake</span>
            </div>
            <div>
                <div class="self-center text-start">Alat Dipinjam</div>
                {{-- <div class="self-center text-start">{{ $totalPeminjamanAlat }}</div> --}}
                <div class="self-center text-start">{{ $todayPeminjamanAlat }}</div>
            </div>
        </div>
    </a>
    <a href="{{ url('/sdr/ruangan') }}" class="text-white" style="text-decoration: none; color: inherit;">
        <div class="bg-[#5479f7] flex gap-3 pl-5 justify-start items-center rounded-lg h-[110px]">
            
            <div class="h-[70px] w-[70px] rounded-sm bg-white flex justify-center items-center">
                <span class="material-icons text-black" style="font-size: 40px">apartment</span>
            </div>
            <div>
                <div class="self-center text-start">Jumlah Ruangan</div>
                <div class="self-center text-start">{{ $totalRuangan }}</div>
            </div>
        </div>
    <a href="{{ url('/sdr/penjadwalanruangan') }}" class="text-white" style="text-decoration: none; color: inherit;">
        <div class="bg-[#5479f7] flex gap-3 pl-5 justify-start items-center rounded-lg h-[110px]">
            <div class="h-[70px] w-[70px] rounded-sm bg-white flex justify-center items-center">
                <span class="material-icons text-black" style="font-size: 40px">room_preferences</span>
            </div>
            <div>
                <div class="self-center text-start">Ruangan Dipakai</div>
                {{-- <div class="self-center text-start">{{ $totalPenjadwalanRuangan }}</div> --}}
                <div class="self-center text-start">{{ $todayPenjadwalanRuangan }}</div>
            </div>
        </div>
    </a>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0 text-black">Status Peminjaman Alat</p>
        <a href="{{ url('/sda/peminjaman_alat') }}" class="text-white" style="text-decoration: none; color: inherit;">
            <div class="flex justify-center">
                <span class="material-icons text-black mr-3">work_history</span>
                <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Peminjaman</p>
            </div>
        </a>
    </div>
    <div class="rounded-lg overflow-x-auto">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-[#fecbcf] text-center uppercase bg-[#5479f7] ">
                <tr>
                    <th scope="col" class="px-3 py-2">
                        Kode Peminjaman
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Nama Alat
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Nama Peminjam
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Tanggal Pinjam
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                @foreach ($peminjaman_alat as $pinjam)
                <tr class="bg-white border-b border-gray-500">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        {{ $pinjam->id_peminjaman }}
                    </th>
                    <td class="px-3 py-2">
                        @foreach ($inventory as $item)
                                @if ($item->kodeAlat === $pinjam->kode_alat)
                                    {{ $item->nama_alat->nama_alat }}
                                @endif
                            @endforeach
                    </td>
                    <td class="px-3 py-2">
                        {{ $pinjam->nama_peminjam }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $pinjam->tanggal_peminjaman }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $pinjam->status_peminjaman }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0 text-black">Status Perawatan Alat</p>
        <a href="{{ url('/sda/perawatan_alat') }}" class="text-white" style="text-decoration: none; color: inherit;">
            <div class="flex justify-center">
                <span class="material-icons text-black mr-3">work_history</span>
                <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Perawatan</p>
            </div>
        </a>
    </div>
    <div class="rounded-lg overflow-x-auto">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-[#fecbcf] text-center uppercase bg-[#5479f7] ">
                <tr>
                    <th scope="col" class="px-3 py-2">
                        Kode Perawatan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Nama Alat
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Jenis Perawatan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Tanggal Perawatan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Status Perawatan
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                @foreach ($perawatan_alat as $rawatalat)
                <tr class="bg-white border-b border-gray-500">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        {{ $rawatalat->id_perawatan }}
                    </th>
                    <td class="px-3 py-2">
                        @foreach ($inventory as $item)
                            @if ($item->kodeAlat === $rawatalat->kode_alat)
                                {{ $item->nama_alat->nama_alat }}
                            @endif
                        @endforeach
                    </td>
                    <td class="px-3 py-2">
                        {{ $rawatalat->jenis_perawatan }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $rawatalat->tanggal_perawatan }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $rawatalat->status_perawatan }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0 text-black">Status Pembelian Alat</p>
        <a href="{{ url('/sda/pembelian') }}" class="text-white" style="text-decoration: none; color: inherit;">
            <div class="flex justify-center">
                <span class="material-icons text-black mr-3">work_history</span>
                <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Pemesanan</p>
            </div>
        </a>
    </div>
    <div class="rounded-lg overflow-x-auto">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-[#fecbcf] text-center uppercase bg-[#5479f7] ">
                <tr>
                    <th scope="col" class="px-3 py-2">
                        Kode Pemesanan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Nama Alat
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Jumlah
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Tanggal Dipesan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                @foreach ($pembelian as $order)
                <tr class="bg-white border-b border-gray-500">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        {{ $order->id_pembelian }}
                    </th>
                    <td class="px-3 py-2">
                        @foreach ($inventory as $item)
                            @if ($item->kodeAlat === $order->kode_alat)
                                {{ $item->nama_alat->nama_alat }}
                            @endif
                        @endforeach
                    </td>
                    <td class="px-3 py-2">
                        {{ $order->jumlah_pembelian }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $order->tanggal_pembelian }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $order->status }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0 text-black">Status Penjadwalan Ruangan</p>
        <a href="{{ url('/sdr/penjadwalanruangan') }}" class="text-white" style="text-decoration: none; color: inherit;">
            <div class="flex justify-center">
                <span class="material-icons text-black mr-3">work_history</span>
                <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Penjadwalan</p>
            </div>
        </a>
    </div>
    <div class="rounded-lg overflow-x-auto">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-[#fecbcf] text-center uppercase bg-[#5479f7] ">
                <tr>
                    <th scope="col" class="px-3 py-2">
                        Kode Penjadwalan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Nama Ruangan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Nama Pengguna
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Lokasi
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                @foreach ($penjadwalan_ruangan as $jadwal)
                <tr class="bg-white border-b border-gray-500">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        {{ $jadwal->id_penjadwalan }}
                    </th>
                    <td class="px-3 py-2">
                        @foreach ($room as $ruangan)
                            @if ($ruangan->kodeRuangan === $jadwal->kodeRuangan)
                                {{-- {{ $ruangan->nama_gedung->nama_gedung }} --}}
                            @endif
                        @endforeach
                    </td>
                    <td class="px-3 py-2">
                        {{ $jadwal->namaPeminjam }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $jadwal->tanggalMasuk }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $jadwal->statusRuangan }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0 text-black">Status Perawatan Ruangan</p>
        <a href="{{ url('/sdr/perawatanruangan') }}" class="text-white" style="text-decoration: none; color: inherit;">
            <div class="flex justify-center">
                <span class="material-icons text-black mr-3">work_history</span>
                <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Perawatan</p>
            </div>
        </a>
    </div>
    <div class="rounded-lg overflow-x-auto">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-[#fecbcf] text-center uppercase bg-[#5479f7] ">
                <tr>
                    <th scope="col" class="px-3 py-2">
                        Kode Perawatan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Nama Ruangan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Kondisi Ruangan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Riwayat
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                @foreach ($perawatan_ruangan as $rawat)
                <tr class="bg-white border-b border-gray-500">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        {{ $rawat->id_perawatan }}
                    </th>
                    <td class="px-3 py-2">
                        @foreach ($room as $ruangan)
                            @if ($ruangan->kodeRuangan === $rawat->kodeRuangan)
                                {{-- {{ $ruangan->nama_gedung->nama_gedung }} --}}
                            @endif
                        @endforeach
                    </td>
                    <td class="px-3 py-2">
                        {{ $rawat->kondisi }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $rawat->history }}
                    </td>
                    <td class="px-3 py-2">
                        {{ $rawat->statusperawatan }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection