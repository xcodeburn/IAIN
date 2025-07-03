@extends('layout.main2')
@section('container2')
@include('fakultas.hero_fkt')
{{-- list jurusan FEBI --}}
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
            Di tengah meningkatnya kebutuhan akan sistem ekonomi yang adil dan berkelanjutan, Program Studi Ekonomi Syariah FEBI hadir sebagai jawaban atas tantangan zaman. Program ini dirancang untuk mencetak lulusan yang tidak hanya menguasai teori ekonomi dan bisnis, tetapi juga memiliki pemahaman mendalam tentang prinsip-prinsip syariah.

            <p class="intro-text">Dengan dukungan dosen profesional, kurikulum berbasis industri, dan lingkungan belajar yang Islami, Ekonomi Syariah FEBI siap mencetak generasi pemimpin ekonomi masa depan yang profesional, berintegritas, dan berkontribusi nyata bagi masyarakat.</p>
        
        <p class="intro-text">Daftar sekarang dan jadi bagian dari perubahan ekonomi yang berkeadilan! </p>
      </div>
    </div>
  
    <div class="row text-center">
      <div class="col-md-4 image-box mb-4" data-aos="fade-up" data-aos-delay="0">
        <a href="/ekonomi">
        <img src="https://img.freepik.com/free-photo/portrait-satisfied-young-asian-woman-holding-cup-coffee-laptop-computer-while-walking-looking-camera-gray-background_231208-2175.jpg?ga=GA1.1.156599651.1747751035&semt=ais_hybrid&w=740" alt="institut agama islam rokan Pendidikan Agama Islam" loading="lazy">
        <div class="image-text">Ekonomi Syariah</div>
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
      “ Menjadi Program Studi Ekonomi Syariah yang unggul dan terkemuka dalam menghasilkan lulusan yang kompeten, profesional, dan berintegritas, serta mampu mengembangkan ekonomi syariah yang berkelanjutan dan berkeadilan “
    </div>
  
    <p class="quote-author mt-3">-{{ $title }} -</p>
  </div>
@endsection
