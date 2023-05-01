@extends('layout2.mainnew')


@section('isi')
    <div class="flex bg-[#5479F7] w-[120px] h-[38px] rounded-lg text-[12px] text-white font-bold justify-evenly items-center">
        <span class="material-icons" style="">home</span>
        Dashboard
    </div>
    <div class="grid grid-cols-4 gap-4 rounded mt-4 text-3xl text-white w-[700px]">
        <div class="bg-[#5479F7] drop-shadow-[0_5px_5px_rgba(0,0,0,0.4)] grid grid-cols-[1fr_2px_2fr] gap-2 justify-center content-center rounded-lg h-[110px]">
            <div class="self-center text-center">5</div>
            <div class="h-[80px] w-[2px] bg-white"></div>
            <div class="text-xl self-center text-start">Alat Dirawat</div>
        </div>
        <div class="bg-[#5479F7] drop-shadow-[0_5px_5px_rgba(0,0,0,0.4)] grid grid-cols-[1fr_2px_2fr] gap-2 justify-center content-center rounded-lg h-[110px]">
            <div class="self-center text-center">15</div>
            <div class="h-[80px] w-[2px] bg-white"></div>
            <div class="text-xl self-center text-start">Ruangan Dirawat</div>
        </div>
        <div class="bg-[#5479F7] drop-shadow-[0_5px_5px_rgba(0,0,0,0.4)] grid grid-cols-[1fr_2px_2fr] gap-2 justify-center content-center rounded-lg h-[110px]">
            <div class="self-center text-center">5</div>
            <div class="h-[80px] w-[2px] bg-white"></div>
            <div class=" text-xl self-center text-start">Alat Dalam Pesanan</div>
        </div>
        <div class="bg-[#5479F7] drop-shadow-[0_5px_5px_rgba(0,0,0,0.4)] grid grid-cols-[1fr_2px_2fr] gap-2 justify-center content-center rounded-lg h-[110px]">
            <div class="self-center text-center">15</div>
            <div class="h-[80px] w-[2px] bg-white"></div>
            <div class="text-xl self-center text-start">Alat Dipinjam</div>
        </div>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0">Status Pemesanan Alat</p> 
        <div class="flex justify-center">
            <span class="material-icons text-black mr-3">work_history</span>
            <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Pemesanan</p>
        </div>
    </div>
    <div class="rounded-lg overflow-x-auto">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-white text-center uppercase bg-[#5479F7] ">
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
                        Status
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Tanggal Dipesan
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                <tr class="bg-white border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        3442
                    </th>
                    <td class="px-3 py-2">
                        Suntik
                    </td>
                    <td class="px-3 py-2">
                        32
                    </td>
                    <td class="px-3 py-2">
                        Bekas
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
                <tr class="bg-[#EAEAEA] border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        34446
                    </th>
                    <td class="px-3 py-2">
                        Komputer
                    </td>
                    <td class="px-3 py-2">
                        9
                    </td>
                    <td class="px-3 py-2">
                        Baik
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
                <tr class="bg-white border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        89543
                    </th>
                    <td class="px-3 py-2">
                        Speaker
                    </td>
                    <td class="px-3 py-2">
                        5
                    </td>
                    <td class="px-3 py-2">
                        Kurang Baik
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
                <tr class="bg-[#EAEAEA] border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        98765
                    </th>
                    <td class="px-3 py-2">
                        Kemeja
                    </td>
                    <td class="px-3 py-2">
                        4
                    </td>
                    <td class="px-3 py-2">
                        Bekas
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
                <tr class="bg-white border-blue-40">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        8709
                    </th>
                    <td class="px-3 py-2">
                        Stetoskop
                    </td>
                    <td class="px-3 py-2">
                        8
                    </td>
                    <td class="px-3 py-2">
                        Kurang Baik
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0">Status Perawatan Alat</p> 
        <div class="flex justify-center">
            <span class="material-icons text-black mr-3">work_history</span>
            <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Perawatan</p>
        </div>
    </div>
    <div class="rounded-lg overflow-x-auto">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-white text-center uppercase bg-[#5479F7] ">
                <tr>
                    <th scope="col" class="px-3 py-2">
                        Kode Alat
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Nama Alat
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Jenis Perawatan
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Status
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Tanggal Perawatan
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                <tr class="bg-white border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        3442
                    </th>
                    <td class="px-3 py-2">
                        Suntik
                    </td>
                    <td class="px-3 py-2">
                        32
                    </td>
                    <td class="px-3 py-2">
                        Bekas
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
                <tr class="bg-[#EAEAEA] border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        34446
                    </th>
                    <td class="px-3 py-2">
                        Komputer
                    </td>
                    <td class="px-3 py-2">
                        9
                    </td>
                    <td class="px-3 py-2">
                        Baik
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
                <tr class="bg-white border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        89543
                    </th>
                    <td class="px-3 py-2">
                        Speaker
                    </td>
                    <td class="px-3 py-2">
                        5
                    </td>
                    <td class="px-3 py-2">
                        Kurang Baik
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
                <tr class="bg-[#EAEAEA] border-b border-blue-400">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        98765
                    </th>
                    <td class="px-3 py-2">
                        Kemeja
                    </td>
                    <td class="px-3 py-2">
                        4
                    </td>
                    <td class="px-3 py-2">
                        Bekas
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
                <tr class="bg-white border-blue-40">
                    <th scope="row" class="px-3 py-2 font-medium whitespace-nowrap">
                        8709
                    </th>
                    <td class="px-3 py-2">
                        Stetoskop
                    </td>
                    <td class="px-3 py-2">
                        8
                    </td>
                    <td class="px-3 py-2">
                        Kurang Baik
                    </td>
                    <td class="px-3 py-2">
                        21/2/2021
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection