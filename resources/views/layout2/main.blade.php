<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL</title>
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-[#D9D9D9] w-full h-[105px] flex">
        <div class="bg-[#ACACAC] w-[324px] h-full"></div>
        <h1 class="font-bold text-3xl ml-24 my-auto ">Manajemen Sumber Daya Alat Dan Kesehatan</h1>
    </nav>
    <div class="flex">
        <nav class="bg-[#D9D9D9] w-[324px] h-[calc(100vh-105px)]">
            <div class="flex w-full items-center">
                <div class="mt-[21px] ml-[17px] w-[105px] h-[105px] bg-[#ACACAC] rounded-full flex justify-center items-center">
                    <span class="material-icons" style="font-size: 80px;">person</span>
                </div>
                <div class="ml-5 mt-[21px]">
                    <p class="text-lg font-bold mb-3">Nama</p>
                    <div class="w-[14px] h-[14px] bg-[#00FF47] rounded-full inline-block"></div>
                    <span class="font-bold text-sm ml-2">Online</span>
                </div>
            </div>
            <div class="mt-10">
                @yield('nav')
                
            </div>
        </nav>
        <main class="p-16">
            @yield('isi')
        </main>
    </div>
<script>
    

</script>
</body>
</html>

