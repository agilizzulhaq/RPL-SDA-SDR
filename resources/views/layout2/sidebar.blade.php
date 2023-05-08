<div class="fixed w-[50px] top-3 left-3 z-[2000]">
    <img src="/img/hanyalogo.png" class="" alt="">
</div>
<div class="sidebar close">
    <div class="logo-details">
      <!-- <i class='bx bxl-c-plus-plus bg-red-600'></i> -->
      <span class="logo_name ml-20 mt-3">SDA & SDR</span>
    </div>
    <ul class="nav-links">
      <li class="{{ Request::is('dashboard-*') ? 'aktif' : '' }}">
        <a href="/dashboard-admin">
            <i class='bx bx-home-alt bx-sm' ></i>
          <span class="link_name ">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="/dashboard-admin">Dashboard</a></li>
        </ul>
      </li>
      <li class="{{ Request::is('data-master*', '*lokasi*', 'nama_alat') ? 'showMenu aktif' : '' }}">
        <div class="iocn-link">
          <a>
            <i class='bx bx-git-repo-forked bx-sm'></i>
            <span class="link_name">Data Master</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
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
          <a href="#">
            <i class='bx bx-injection bx-sm' ></i>
            <span class="link_name">SDA</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
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
            <i class='bx bx-buildings bx-sm' ></i>
            <span class="link_name">SDR</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
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
            <div class="job">Admin</div>
          </div>
          <div class="i w-12 h-12 rounded-full hover:bg-[#282733] ease-in-out transition duration-150 cursor-pointer flex justify-center items-center">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span class="material-icons text-white te">logout</span></a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
            </form>
          </div>
        </div>
      </li>
      
    </ul>
</div>