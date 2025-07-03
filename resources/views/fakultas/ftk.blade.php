@extends('layout.main2')
@section('container2')
@include('fakultas.hero_fkt')
{{-- list jurusan FTK --}}
<div class="container py-5 text-center">
    <div class="row mb-4">
      <div class="col-md-4">
        <div class="tagline fw-bold">
          Unggul<br>
          Moderat<br>
          Kreatif
        </div>
      </div>
      <div class="col-md-8 d-flex align-items-center justify-content-center">
        <h1 class="display-5">{{ $title }}</h1>
      </div>
    </div>
  
    <div class="row mb-5">
      <div class="col">
        <p class="intro-text">
          Melalui program studi ini, mahasiswa memiliki kesempatan untuk memilih jurusan yang selaras dengan minat dan tujuan karier mereka.<br>
          Masing-masing jurusan menggabungkan dasar keilmuan Islam dengan pendekatan pendidikan yang aplikatif guna membentuk tenaga pendidik
          yang kompeten dan adaptif di era modern.
        </p>
        <p class="intro-text">Saat ini, Fakultas Tarbiah dan Keguruan memiliki 3 jurusan unggulan, diantaranya : </p>
      </div>
    </div>
  
    <div class="row text-center">
      <div class="col-md-4 image-box mb-4" data-aos="fade-up" data-aos-delay="0">
        <a href="/pai">
        <img src="https://img.freepik.com/free-photo/portrait-satisfied-young-asian-woman-holding-cup-coffee-laptop-computer-while-walking-looking-camera-gray-background_231208-2175.jpg?ga=GA1.1.156599651.1747751035&semt=ais_hybrid&w=740" alt="institut agama islam rokan Pendidikan Agama Islam" loading="lazy">
        <div class="image-text">Pendidikan Agama Islam <p>PAI</p></div>
      </a>
      </div>
      <div class="col-md-4 image-box mb-4" data-aos="fade-up" data-aos-delay="200">
        <a href="/pgsd">
        <img src="https://img.freepik.com/free-photo/beautiful-smiling-korean-woman-hat-pointing-finger-left-showing-information-banner-demonstrates-o_1258-169346.jpg?ga=GA1.1.156599651.1747751035&semt=ais_hybrid&w=740" alt="institut agama islam rokan Pendidikan Guru Madrasah Ibtidaiyah" loading="lazy">
        <div class="image-text">Pendidikan Guru Madrasah Ibtidaiyah <p>PGMI / PGSD</p></div>
      </a>
      </div>
      <div class="col-md-4 image-box mb-4" data-aos="fade-up" data-aos-delay="400">
        <a href="/pgpaud">
        <img src="https://img.freepik.com/premium-photo/asian-male-student-portrait-purple-background_466494-3212.jpg?ga=GA1.1.156599651.1747751035&semt=ais_hybrid&w=740" alt="institut agama islam pendidikan anak usia dini" loading="lazy">
        <div class="image-text">Pendidikan Islam Anak Usia Dini <p>PIAUD / PGPAUD</p></div>
      </a>
      </div>
    </div>
  </div>
  {{-- visi misi --}}
  <div class="container text-center py-5">
    <div class="row justify-content-center align-items-center">
      <div class="col-auto">
        <img src="{{ asset('img/IAIN.webp') }}" alt="Logo IAI Rokan" class="logo" style="width: 80px;" loading="lazy">
        <!-- Ganti URL di atas dengan path gambar asli seperti: src="2025-05-21_083146.png" -->
      </div>
      <div class="col-auto">
        <div class="divider d-none d-md-inline-block"></div>
      </div>
      <div class="col-auto">
        <h2 class="fw-normal">Institut Agama Islam Rokan</h2>
      </div>
    </div>
  
    <div class="quote mt-5 px-3">
      “ Menjadi program studi pendidikan agama Islam yang unggul dan terkemuka dalam menghasilkan lulusan yang berkompeten,
      berakhlak mulia, dan berwawasan global untuk meningkatkan kualitas pendidikan agama di masyarakat “
    </div>
  
    <p class="quote-author mt-3">- Fakultas Tarbiyah dan Keguruan -</p>
  </div>
@endsection
