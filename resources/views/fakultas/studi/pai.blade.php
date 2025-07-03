@extends('fakultas.main')
@section('isi')
{{-- akreditasi --}}
<!-- SECTION: Akreditasi Program Studi -->
<section id="next-section" class="pt-5 mb-5 bg-white">
  <div class="container">
    <div class="row">
      <!-- Teks Akreditasi -->
      <div class="col-12">
        <h2 class="fw-bold mb-4 display-6 text-primary">Akreditasi Program Studi</h2>
        <p class="intro-text fs-5 lh-lg text-dark">
          Program Studi Pendidikan Agama Islam (PAI) telah memperoleh status akreditasi <strong class="text-success">Baik</strong> dari <strong>Badan Akreditasi Nasional Perguruan Tinggi (BAN–PT)</strong>. 
          Capaian ini mencerminkan komitmen berkelanjutan Program Studi dalam menjamin mutu dan peningkatan kualitas pendidikan secara konsisten.
        </p>
        <p class="fs-5 lh-lg text-dark">
          Akreditasi ini mencakup penilaian terhadap berbagai aspek, termasuk kurikulum, proses pembelajaran, kompetensi lulusan, sarana prasarana, dan penelitian yang dilakukan oleh dosen dan mahasiswa.
        </p>
        <p class="mt-4 fw-semibold fst-italic text-secondary fs-5 border-start border-4 ps-3 border-primary">
          “Dengan visi menjadi program studi yang unggul dan terkemuka, kami berkomitmen menghasilkan pendidik agama Islam yang kompeten, berakhlak mulia, dan siap bersaing di tingkat global.”
        </p>
      </div>
    </div>
  </div>
</section>

{{-- SECTION: Daftar Pengajar --}}
<section class="mt-5 pb-5 bg-white">
  <div class="container">
    <div class="d-flex align-items-center mb-3">
      <h4 class="fw-bold mb-0">Daftar Pengajar</h4>
      <div class="flex-grow-1 border-bottom border-warning ms-3"></div>
    </div>
    <p>
      Kenalan lebih dekat dengan para dosen hebat yang siap membimbing dan menginspirasi! Mereka bukan cuma ahli di bidangnya, tetapi juga selalu terbuka untuk berbagi ilmu dan pengalaman. Yuk, kenali siapa saja yang akan menemani perjalanan belajarmu!
    </p>
    <table class="table table-bordered mt-3">
      <thead class="table-light">
        <tr>
          <th>No</th>
          <th>Nama</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1.</td><td>Dr. Neni, M.Pd.I</td></tr>
        <tr><td>2.</td><td>Dr. Koiy Harahap, MA</td></tr>
        <tr><td>3.</td><td>MHD Amin, S.HI, MH</td></tr>
        <tr><td>4.</td><td>Abdul Hadi lubis, M.Pd</td></tr>
        <tr><td>5.</td><td>Dr. Syahrul Hasibuan M.Pd.I</td></tr>
        <tr><td>6.</td><td>Dr. Husni Mubarok, M.Pd</td></tr>
        <tr><td>7.</td><td>Muhammad Amin, S.HI, M.H</td></tr>
        <tr><td>8.</td><td>Dr. Imran Rido, S.HI, M.Pd</td></tr>
        <tr><td>9.</td><td>Laela Hamidah Harahap, M.Pd</td></tr>
        <tr><td>10.</td><td>Dr. Siti Halimah M.Pd</td></tr>
        <tr><td>.</td><td>Assoc. Prof. Dr. Sawaluddin, M.Pd.I</td></tr>
      </tbody>
    </table>
  </div>
</section>

<!-- SECTION: Mengapa Memilih PAI -->
<section class="pt-2 pb-5 bg-light">
  <div class="container">
    <h4 class="fw-bold mb-4 text-center">Mengapa Memilih {{ $title }} ?</h4>
    <div class="row g-4">

      <!-- Box 1 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-journal-richtext"></i></div>
          <h6 class="fw-bold">Kurikulum Terintegrasi</h6>
          <p class="small mb-0">Kurikulum menggabungkan ilmu agama dan pendidikan modern, membentuk lulusan kompeten.</p>
        </div>
      </div>

      <!-- Box 2 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-briefcase"></i></div>
          <h6 class="fw-bold">Peluang Karir Luas</h6>
          <p class="small mb-0">Lulusan berpeluang kerja luas di berbagai bidang pendidikan dan keagamaan.</p>
        </div>
      </div>

      <!-- Box 3 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-people"></i></div>
          <h6 class="fw-bold">Jaringan Alumni Kuat</h6>
          <p class="small mb-0">Alumni tersebar luas dan siap membantu dalam pengembangan karier Anda.</p>
        </div>
      </div>

      <!-- Box 4 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-lightbulb"></i></div>
          <h6 class="fw-bold">Penelitian Berbasis Nilai</h6>
          <p class="small mb-0">Kami mendorong penelitian bernilai keislaman dan inovatif secara akademik.</p>
        </div>
      </div>

      <!-- Box 5 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-moon-stars"></i></div>
          <h6 class="fw-bold">Lingkungan Islami</h6>
          <p class="small mb-0">Lingkungan kampus kondusif membentuk karakter religius dan beretika.</p>
        </div>
      </div>

      <!-- Box 6 -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-globe2"></i></div>
          <h6 class="fw-bold">Kerjasama Internasional</h6>
          <p class="small mb-0">Kolaborasi global memperluas kesempatan riset dan pertukaran pelajar.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection