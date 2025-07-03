<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link rel="stylesheet" href="{{asset('css/style2.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons (jika belum ada) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- AOS Animation Library -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    /* Animasi Fade In */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    html {
      scroll-behavior: smooth; /* Smooth scroll */
    }
    section[id] {
  scroll-margin-top: 100px; /* Hindari tertutup hero/nav saat scroll ke ID */
}
    .hero-section {
      z-index: 1;
      background-color: #813ee6;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%236229be' fill-opacity='1'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") no-repeat center center fixed;
      background-size: cover;
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      padding: 80px 0;
      animation: fadeIn 1.5s ease-out both;
    }

    .hero-title {
  font-size: 3.5rem;  /* sebelumnya 2.5rem */
  font-weight: 700;
}

.hero-description {
  font-size: 1.4rem;  /* sebelumnya 1.1rem */
  margin-top: 15px;
  margin-bottom: 40px;
}

    .hero-buttons .btn {
      margin-right: 10px;
    }

    .hero-image {
      max-width: 200px;
    }

    /* Scroll Arrow */
    .scroll-down {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 2rem;
      color: white;
      animation: bounce 2s infinite;
      cursor: pointer;
    }

    @keyframes bounce {
      0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
      40% { transform: translateX(-50%) translateY(-10px); }
      60% { transform: translateX(-50%) translateY(-5px); }
    }

    /* Section placeholder */
    /* #next-section {
      height: 70vh;
      background-color: #f8f9fa;
    } */
    .shadow-sm:hover {
  box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1);
  transform: translateY(-5px);
  transition: 0.3s ease;
}
/* zoom hover sertifikat*/
.zoom-hover {
    transition: transform 0.3s ease;
  }

  /* Gaya untuk modal (gambar besar) */
  .modal {
    display: none; /* Secara default modal disembunyikan */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Latar belakang gelap */
    justify-content: center;
    align-items: center;
  }

  .modal-content {
    max-width: 90%;
    max-height: 80%;
    margin: auto;
    transition: transform 0.3s ease;
  }

  .close-btn {
    position: absolute;
    top: 20px;
    right: 30px;
    color: white;
    font-size: 36px;
    font-weight: bold;
    cursor: pointer;
  }

  /* Animasi saat gambar modal muncul */
  .modal.show {
    display: flex;
  }

  .zoom-hover:hover {
    transform: scale(1.1); /* Ukuran zoom, bisa disesuaikan */
  }
  /* garis gradasi */
  .gradient-line {
    height: 3px;
    flex-grow: 1;
    background: linear-gradient(to right, #3B00FF, #C4FF00);
  }

  .gradient-line.reverse {
    background: linear-gradient(to right, #C4FF00, #3B00FF);
  }
  </style>
</head>
<body>
  @include('partials.navbar2')
  @include('fakultas.hero')
  @yield('isi')
  @include('partials.footer')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AOS Script -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
{{-- akreditasi diklik --}}
<!-- JavaScript untuk menangani aksi klik -->
<script>
  // Ambil elemen yang diperlukan
  const imageClick = document.getElementById('imageClick');
  const imageModal = document.getElementById('imageModal');
  const modalImage = document.getElementById('modalImage');
  const closeModal = document.getElementById('closeModal');

  // Ketika gambar di-klik, tampilkan modal dengan gambar besar
  imageClick.addEventListener('click', function() {
    imageModal.classList.add('show');
    modalImage.src = imageClick.src; // Menampilkan gambar yang sama di dalam modal
  });

  // Ketika tombol close di-klik, sembunyikan modal
  closeModal.addEventListener('click', function() {
    imageModal.classList.remove('show');
  });

  // Jika area di luar gambar modal diklik, tutup modal
  window.addEventListener('click', function(event) {
    if (event.target === imageModal) {
      imageModal.classList.remove('show');
    }
  });
</script>
</body>
</html>