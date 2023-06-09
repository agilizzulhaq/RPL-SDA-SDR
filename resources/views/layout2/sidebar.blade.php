<a href="{{ url('/dashboard-admin') }}">
<div class="fixed w-[50px] top-3 left-3 z-[2000]">
    <img src="/img/hanyalogo.png" class="" alt="">
</div>
<div class="sidebar close  drop-shadow-[1px_0_5px_rgba(0,0,0,0.25)]">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus bg-red-600'></i> -->
      <span class="w-32 ml-20 mt-3"><img src="/img/rosationly.png" alt=""></span>
    </div>
</a>
    <ul class="nav-links">
      <li class="{{ Request::is('dashboard-*') ? 'aktif' : '' }}" style="">
        <a href="/dashboard">
          <i class='bx bx-home-alt bx-sm' style="{{ Request::is('dashboard-*') ? 'color: white' : '' }}"></i>
          <span class="link_name " style="{{ Request::is('dashboard-*') ? 'color: white' : '' }}">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/dashboard-admin">Dashboard</a></li>
        </ul>
      </li>
      @if($userLevel == 1)
      <li class="{{ Request::is('data-master*', '*lokasi*', 'nama_alat') ? 'showMenu aktif' : '' }}">
        <div class="iocn-link">
          <a>
            <i class='bx bx-git-repo-forked bx-sm' style="{{ Request::is('data-master*', '*lokasi*', 'nama_alat') ? 'color: white' : '' }}"></i>
            <span class="link_name" style="{{ Request::is('data-master*', '*lokasi*', 'nama_alat') ? 'color: white' : '' }}">Data Master</span>
          </a>
          <i class='bx bxs-chevron-down arrow' style="{{ Request::is('data-master*', '*lokasi*', 'nama_alat') ? 'color: white' : '' }}" ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name">Data Master</a></li>
          <li><a href="/nama_alat">Nama Alat</a></li>
          <li><a href="/lokasi">Lokasi</a></li>
          <li><a href="/data-master/users">Users</a></li>
          <li><a href="/data-master/vendor">Vendor</a></li>
        </ul>
      </li>
      @endif
      <li class="{{ Request::is('sda*') ? 'showMenu aktif' : '' }}">
        <div class="iocn-link">
          <a>
            <i class='bx bx-injection bx-sm' style="{{ Request::is('sda*') ? 'color: white' : '' }}" ></i>
            <span class="link_name" style="{{ Request::is('sda*') ? 'color: white' : '' }}">SDA</span>
          </a>
          <i class='bx bxs-chevron-down arrow' style="{{ Request::is('sda*') ? 'color: white' : '' }}" ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name">SDA</a></li>
          <li><a href="/sda/alat">Data Alat</a></li>
          <li><a href="/sda/peminjaman_alat">Peminjaman</a></li>
          <li><a href="/sda/perawatan_alat">Perawatan</a></li>
          <li><a href="/sda/pembelian">Pengadaan</a></li>
        </ul>
      </li>
      <li class="{{ Request::is('*ruangan*') ? 'showMenu aktif' : '' }}">
        <div class="iocn-link">
          <a>
            <i class='bx bx-buildings bx-sm' style="{{ Request::is('*ruangan*') ? 'color: white' : '' }}" ></i>
            <span class="link_name" style="{{ Request::is('*ruangan*') ? 'color: white' : '' }}">SDR</span>
          </a>
          <i class='bx bxs-chevron-down arrow' style="{{ Request::is('*ruangan*') ? 'color: white' : '' }}" ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name">SDR</a></li>
          <li><a href="/sdr/ruangan">Data Ruangan</a></li>
          <li><a href="/sdr/penjadwalanruangan">Penjadwalan</a></li>
          <li><a href="/sdr/perawatanruangan">Pemeliharaan</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a>
            <i class='bx bxs-book-content'></i>
            <span class="link_name">UAS</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name">UAS</a></li>
          <li class="dropdown">
            <div class="iocn-link">
                <a class="sub-menu-link">UAS_Regina</a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-sub-menu">
              <li><a href="/prodiregina">Data Prodi</a></li>
              <li><a href="/tempatlahirregina">Data Tempat Lahir</a></li>
              <li><a href="/mahasiswaregina">Data Mahasiswa</a></li>
              <li><a href="/alamatregina">Data Alamat</a></li>
              <li><a href="/matkulregina">Data Matkul</a></li>
            </ul>
          </li>
          <li><a href="/mahasiswa-agil">UAS Agil</a></li>
          <li><a href="{{ url('mahasiswa_alyzar') }}">UAS Alyzar</a></li>
          <li><a href="/mahasiswa">UAS Arjuna</a></li>
          <li><a href="{{ url('crudrasikhs') }}">UAS Rasikh</a></li>
          {{-- <li><a href="/sdr/ruangan">Data Ruangan</a></li> --}}
        </ul>
      </li>


      <li>
        <div class="profile-details flex justify-between">
          <div class="flex">
            <div class="profile-content">
              <img src="/img/Rasikh Khalil Pasha.jpg" alt="profileImg">
            </div>
            <div class="name-job">
              <div class="profile_name">{{ Auth::user()->name }}</div>
              <div class="job">{{ Auth::user()->name }}</div>
            </div>
          </div>
          <div class="i w-12 h-12 rounded-full mr-2 hover:bg-[#eaeaea] ease-in-out transition duration-150 cursor-pointer flex justify-center items-center">
            <a href="{{ url('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span class="material-icons text-[#1a1a1a]">logout</span></a>

            <form id="logout-form" action="{{ url('logout') }}" method="POST">
              @csrf
            </form>
          </div>
        </div>
      </li>

    </ul>
</div>
