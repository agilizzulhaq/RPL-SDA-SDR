@extends('layout2.mainnew-user')


@section('isi')
    <div class="flex bg-[#5479f7] mt-16 w-[120px] h-[38px] rounded-lg text-[12px] text-[#fecbcf] font-bold justify-evenly items-center">
        <span class="material-icons" style="">home</span>
        Dashboard
    </div>
    <div class="grid grid-cols-4 gap-4 rounded mt-4 text-md font-bold text-[#fecbcf] w-full">
        <div class="bg-[#5479f7] flex gap-3 pl-5 justify-start items-center rounded-lg h-[110px]">
            
            <div class="h-[70px] w-[70px] rounded-sm bg-white flex justify-center items-center">
                <span class="material-icons text-black" style="font-size: 40px">inventory_2</span>
            </div>
            <div>
                <div class="self-center text-start">Jumlah Alat</div>
                <div class="self-center text-start">29</div>
            </div>
        </div>
        <div class="bg-[#5479f7] flex gap-3 pl-5 justify-start items-center rounded-lg h-[110px]">
            
            <div class="h-[70px] w-[70px] rounded-sm bg-white flex justify-center items-center">
                <span class="material-icons text-black" style="font-size: 40px">handshake</span>
            </div>
            <div>
                <div class="self-center text-start">Alat Dipinjam</div>
                <div class="self-center text-start">29</div>
            </div>
        </div>
        <div class="bg-[#5479f7] flex gap-3 pl-5 justify-start items-center rounded-lg h-[110px]">
            
            <div class="h-[70px] w-[70px] rounded-sm bg-white flex justify-center items-center">
                <span class="material-icons text-black" style="font-size: 40px">apartment</span>
            </div>
            <div>
                <div class="self-center text-start">Jumlah Ruangan</div>
                <div class="self-center text-start">29</div>
            </div>
        </div>
        <div class="bg-[#5479f7] flex gap-3 pl-5 justify-start items-center rounded-lg h-[110px]">
            
            <div class="h-[70px] w-[70px] rounded-sm bg-white flex justify-center items-center">
                <span class="material-icons text-black" style="font-size: 40px">room_preferences</span>
            </div>
            <div>
                <div class="self-center text-start">Ruangan Dipakai</div>
                <div class="self-center text-start">29</div>
            </div>
        </div>
        
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0 text-black">Status Pemesanan Alat</p> 
        <div class="flex justify-center">
            <span class="material-icons text-black mr-3">work_history</span>
            <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Pemesanan</p>
        </div>
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
                        Status
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Tanggal Dipesan
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                <tr class="bg-white border-b border-gray-500">
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
                <tr class="bg-[#EAEAEA] border-b border-gray-500">
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
                <tr class="bg-white border-b border-gray-500">
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
                
            </tbody>
        </table>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0 text-black">Status Perawatan Alat</p> 
        <div class="flex justify-center">
            <span class="material-icons text-black mr-3">work_history</span>
            <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Perawatan</p>
        </div>
    </div>
    <div class="rounded-lg overflow-x-auto">
        <table class="w-full text-sm text-left text-blue-100">
            <thead class="text-xs text-[#fecbcf] text-center uppercase bg-[#5479f7] ">
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
                <tr class="bg-white border-b border-gray-500">
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
                <tr class="bg-[#EAEAEA] border-b border-gray-500">
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
                <tr class="bg-white border-b border-gray-500">
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
                
            </tbody>
        </table>
    </div>
    <div class="flex justify-between items-center w-full my-3">
        <p class="font-bold m-0 text-black">Status Pembelian Alat</p> 
        <div class="flex justify-center">
            <span class="material-icons text-black mr-3">work_history</span>
            <p class="text-sm underline m-0 text-black cursor-pointer hover:text-grey-900 hover:no-underline">History Pembelian</p>
        </div>
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
                        Status
                    </th>
                    <th scope="col" class="px-3 py-2">
                        Tanggal Dipesan
                    </th>
                </tr>
            </thead>
            <tbody class="text-black text-center">
                <tr class="bg-white border-b border-gray-500">
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
                <tr class="bg-[#EAEAEA] border-b border-gray-500">
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
                <tr class="bg-white border-b border-gray-500">
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
                
            </tbody>
        </table>
    </div>

@endsection