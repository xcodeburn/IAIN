<nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <ul class="nav flex-column px-3">
          <li class="nav-item mb-2"><a class="nav-link {{ Request::is('dashboard')? 'active' : '' }}" href="/dashboard">Dashboard</a></li>
          <li class="nav-item mb-2"><a class="nav-link {{ Request::is('dash/posts*')? 'active' : '' }}" href="/dash/posts">Post</a></li>
          <li class="nav-item mb-2"><a class="nav-link disabled" href="#">Pengguna</a></li>
          <li class="nav-item mb-2"><a class="nav-link disabled" href="#">Pengaturan</a></li>
        </ul>
        <div class="sidebar-footer px-3 mt-auto">
          <p>Developed by iai-rokan</p>
        </div>
      </nav>