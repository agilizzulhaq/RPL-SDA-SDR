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
    <script async src="https://basicons.xyz/embed.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="bg-white w-[324px] h-5 absolute top-[86px]"></div>
    <nav class="bg-white w-full h-[105px] flex items-center justify-evenly" style="box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);">
        <div class="w-[191px]">
            <img src="/img/rosati.png" alt="rosati">
        </div>
        
        <h1 class="font-bold text-3xl ml-24 my-auto ">Manajemen Sumber Daya Alat Dan Kesehatan</h1>
        
            
            
        <div id="user" class="w-[188px] h-[54px] cursor-pointer hover:bg-[#6b88e7] bg-[#5479F7] flex justify-evenly items-center rounded-lg ml-40">
            <span class="material-icons" style="color: white; font-size: 33px;">person</span>
            <div>
                <p class="font-bold text-sm text-white mb-0">Rasikh Kopi</p>
                <p class="font-bold text-sm text-white mb-0">Admin</p>                
            </div>
            <span class="material-icons" style="color: white">expand_more</span>
        </div>
            
            
        
    </nav>
    <div id="logout" class="w-[187px] h-[47px] hidden justify-evenly cursor-pointer hover:bg-[#ec3c3c] items-center bg-[#FF0000] text-white rounded-lg right-[60px] top-[83px] absolute">
        <p class="font-bold m-0">Log Out</p>
        <span class="material-icons">logout</span>
    </div>
    <div class="flex">
        <nav class="bg-white w-[324px] h-[calc(100vh-105px)]" style="box-shadow: 4px 0 4px rgba(0, 0, 0, 0.25);">
            
            <div>
                @yield('nav')
                
            </div>
        </nav>
        <main class="p-16 w-[calc(100vw-324px)] bg-[#EAEAEA] -z-50">
            @yield('isi')
        </main>
    </div>
<script>    
    const user = document.getElementById("user");
    const logout = document.getElementById("logout");

    user.addEventListener("click", function(){
        logout.classList.toggle("hidden");
        logout.classList.toggle("flex");
    })


</script>
</body>
</html>

