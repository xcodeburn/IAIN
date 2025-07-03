<!DOCTYPE html>
<html lang="en"> <!-- data-bs-theme="light" -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style2.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>IAIR | {{ $title }}</title>
    {{-- style jurusan --}}
    <style>
      body {
        font-family: 'Georgia', serif;
      }
      /* hero-image-fakultas */
      /* hero-image */
    /* Animasi Fade In */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .hero-section {
      height: 100vh;
      background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.6)),
        url('https://images.unsplash.com/photo-1597750058295-bb8a227ec342?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80') center/cover no-repeat;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 20px;
      animation: fadeIn 1.5s ease-out both;
    }

    .hero-content {
      animation: fadeIn 2s ease-out both;
      animation-delay: 0.5s;
    }

    .hero-content h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    .hero-content p {
      font-size: 1.2rem;
      margin: 20px 0;
    }
      /* image-box */
      .tagline {
        font-size: 2.5rem;
        line-height: 1.2;
      }
      .intro-text {
        font-size: 1.5rem;
      }
      .image-box {
    position: relative;
    overflow: hidden;
    border-radius: 8px;
  }

  .image-box img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    filter: blur(4px); /* Blur gambar */
    transform: scale(1.05); /* Sedikit zoom agar blur terlihat lebih lembut */
  }

  .image-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 1.5rem;
    font-weight: bold;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6); /* Supaya teks tetap terbaca di atas gambar blur */
    text-align: center;
    padding: 0 10px;
    width: 100%;
  }
      /* bagian visi */
      .quote {
  font-size: 1.6rem; /* sebelumnya 1.25rem */
  line-height: 2;
  margin-top: 2rem;
  font-weight: 500;
}

    .quote-author {
      font-style: italic;
      color: #555;
    }
    .divider {
      border-left: 2px solid #444;
      height: 100px;
      margin: 0 1rem;
    }
    </style>
</head>
<body>
@include('partials.navbar2')
@yield('container2') <!-- ini nama yang akan diisi pada menu-menu nav-->
@include('partials.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>