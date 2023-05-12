<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/sidenav_style2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link href="{{ asset('/') }}assets/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="{{ asset('/') }}assets/plugin/fontawesome/css/all.min.css" rel="stylesheet">


    <script async src="https://basicons.xyz/embed.js"> </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sistem Sumber Daya Alat dan Ruangan Rumah Sakit ROSATI</title>
</head>
<body>

    @include('layout2.sidebar')

    <div class="nav fixed w-full le z-[50000]">
        <div class="home-content">
            <i class='bx bx-menu hover:bg-[#282733] rounded-full w-12 h-12 pt-[6px] text-center' ></i>

            <div class="w-full h-16 bg-[#11101D] absolute top-0">
                {{-- <form class="flex items-center mt-[11px] ml-20">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-[400px]">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-gray-50 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                    </div>
                    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </form> --}}
            </div>
        </div>
    </div>

    <section class="home-section">
        <div class="px-4 py-4 bg-[#1d1b31] text-[#bcbcbc] min-h-screen">
            @yield('isi')
        </div>
    </section>

    <script>

        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e)=>{
                let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        let nav = document.querySelector(".nav")

        let isClose = localStorage.getItem('isClose');

        if (isClose === 'true') {
            sidebar.classList.add('close');
            nav.classList.add('ml-[78px]');
        }else{
            sidebar.classList.remove('close');
            nav.classList.add('ml-[260px]')
        }

        sidebarBtn.addEventListener("click", ()=>{

            if (sidebar.classList.contains('close')) {
                sidebar.classList.remove('close');
                nav.classList.remove('ml-[78px]')
                nav.classList.add('ml-[260px]')
                localStorage.setItem('isClose', 'false');
            } else {
                sidebar.classList.add('close');
                nav.classList.remove('ml-[260px]')
                nav.classList.add('ml-[78px]')
                localStorage.setItem('isClose', 'true');
            }


        });

        let editButton = document.getElementById('edit');
        let editDanHapus = document.querySelectorAll('#hapus-edit')

        editDanHapus.forEach(element => {
                element.classList.toggle('hidden');
            });
        // if(editButton3) console.log('aku mau')
        editButton.addEventListener('click', function(){
            editDanHapus.forEach(element => {
                element.classList.toggle('hidden');
            });
        })

        console.log(editButton)


    </script>
</body>
</html>
