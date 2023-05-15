<div class="fixed w-[50px] top-3 left-3 z-[2000]">
    <img src="/img/hanyalogo.png" class="" alt="">
</div>
<div class="sidebar close  drop-shadow-[1px_0_5px_rgba(0,0,0,0.25)]">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus bg-red-600'></i> -->
      <span class="w-32 ml-20 mt-3"><img src="/img/rosationly.png" alt=""></span>
    </div>
    
    <ul class="nav-links">
      <li class="{{ Request::is('dashboard-*') ? 'aktif' : '' }}" style="">
        <a href="/dashboard-warehouse">
          <i class='bx bx-home-alt bx-sm' style="{{ Request::is('dashboard-*') ? 'color: white' : '' }}"></i>
          <span class="link_name " style="{{ Request::is('dashboard-*') ? 'color: white' : '' }}">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/dashboard-admin">Dashboard</a></li>
        </ul>
      </li>
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
          <li><a href="/penjadwalanruangan">Penjadwalan</a></li>
          <li><a href="/perawatanruangan">Pemeliharaan</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="/img/Rasikh Khalil Pasha.jpg" alt="profileImg">
          </div>
          <div class="name-job">
            <div class="profile_name">Rasikh K.P</div>
            <div class="job">Warehouse Keeper</div>
          </div>
          <div class="i w-12 h-12 rounded-full ml-[40px] hover:bg-[#eaeaea] ease-in-out transition duration-150 cursor-pointer flex justify-center items-center">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span class="material-icons text-[#1a1a1a]">logout</span></a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          </div>
        </div>
      </li>
      
    </ul>
</div>