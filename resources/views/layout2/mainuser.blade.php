<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL</title>
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="/css/style.css"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script async src="https://basicons.xyz/embed.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-[#EAEAEA]">
    <div class="fixed bg-white z-50 w-[300px] h-2 top-[86px]"></div>
    <nav class="bg-white w-full z-10 h-[94px] flex items-center justify-evenly fixed" style="box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);">
        <div class="w-[191px]">
            <img src="/img/logo.png" alt="rosati">
        </div>
        
        <h1 class="font-bold text-3xl ml-24 my-auto transform scale-90">Manajemen Sumber Daya Alat Dan Kesehatan</h1>
        
            
        <div>
            <div id="user" class="w-[188px] group text-white h-[54px] transform scale-90 cursor-pointer hover:bg-[#6b88e7] bg-[#5479F7] flex justify-evenly items-center rounded-lg ml-40">
                <span class="material-icons" style="font-size: 33px;">person</span>
                <div>
                    <p class="font-bold text-sm mb-0">Rasikh Kopi</p>
                    <p class="font-bold text-sm mb-0">User</p>                
                </div>
                <span id="expand" class="material-icons group-hover:text-[#dba9a9]" style="">expand_more</span>
            </div>
                
            <div id="logout" class="transform scale-90 w-[187px] h-[47px] hidden justify-evenly cursor-pointer hover:bg-[#ec3c3c] items-center bg-[#FF0000] text-white rounded-lg ml-[161px] absolute">
                <p class="font-bold m-0">Log Out</p>
                <span class="material-icons">logout</span>
            </div>
        </div>
            
        
    </nav>
    <div class="flex">
        <nav class="bg-white z-10 w-[300px] h-[calc(100vh-94px)] fixed translate-y-[94px]" style="box-shadow: 4px 0 4px rgba(0, 0, 0, 0.25);">
            
            <div>
                @yield('nav')
                
            </div>
        </nav>
        <main class="p-10 w-[calc(100vw-317px)] translate-y-[94px] translate-x-[300px]">
            @yield('isi')
        </main>
    </div>
<script>    
    const user = document.getElementById("user");
    const logout = document.getElementById("logout");
    const expand = document.getElementById("expand");

    user.addEventListener("click", function(){
        logout.classList.toggle("hidden");
        logout.classList.toggle("flex");
        (expand.innerHTML == "expand_more") ? expand.innerHTML = "expand_less" : expand.innerHTML = "expand_more"        
    });


</script>
</body>
</html>

