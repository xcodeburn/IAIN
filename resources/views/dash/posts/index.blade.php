<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Dashboard Admin modern dengan tampilan fleksibel, stylish, dan fungsional.">
  <title>Dashboard | Admin</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/dash.css') }}">
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@1.3.1/dist/trix.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Google Fonts + Custom Style -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

</head>
<body id="body">
  <!-- Navbar -->
  @yield('container')
   <div class="container-fluid">
    <div class="row">
        @include('dash.layouts.header')
      <!-- Sidebar -->
      @include('dash.layouts.sidebar')
      <!-- Main content -->
      <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
        <h1 class="mb-4 fw-semibold">Dashboard Admin</h1>
        <!-- Cards -->
        @include('dash.layouts.cards')
        <!-- Form -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h5 mb-3">Daftar Post Terbaru</h2>
    </div>

    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
    @endif
    
    <div class="table-responsive">
      <a href="/dash/posts/create" class="btn btn-primary mb-3">create new</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Judul</th>
                    <th>excerpt</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $index => $post)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $post->author ?? 'N/A' }}</td> <!-- Pastikan author ada -->
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->excerpt }}</td>
                        <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        <!-- Footer -->
        <footer>
          &copy; 2025 - AdminPanel by iai-rokan
        </footer>
      </main>
    </div>
  </div>

  <!-- Bootstrap JS + DarkMode Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
  const toggleBtn = document.getElementById('darkModeToggle');
  const toggleIcon = document.getElementById('toggleIcon');
  const body = document.getElementById('body');

  // Fungsi untuk set icon
  function setIcon(mode) {
    toggleIcon.textContent = mode === 'dark' ? '☀️' : '🌙';
  }

  // Cek preferensi dari localStorage saat load
  const savedMode = localStorage.getItem('mode');
  if (savedMode === 'dark') {
    body.classList.add('dark-mode');
    setIcon('dark');
  } else {
    setIcon('light');
  }

  // Toggle dark mode saat diklik
  toggleBtn.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const newMode = body.classList.contains('dark-mode') ? 'dark' : 'light';
    localStorage.setItem('mode', newMode);
    setIcon(newMode);
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
      feather.replace();
    </script>
    <script type="text/javascript" src="https://unpkg.com/trix@1.3.1/dist/trix.js"></script>

</body>