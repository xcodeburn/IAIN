@extends('fakultas.main')
@section('isi')

{{-- SECTION: Akreditasi --}}
<section id="next-section" class="pt-5 pb-4 mb-4 bg-white" style="scroll-margin-top: 100px;">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12">
        <div class="d-flex align-items-center mb-3">
            <h4 class="fw-bold mb-0">Akreditasi Program Studi</h4>
            <div class="flex-grow-1 border-bottom border-warning ms-3"></div>
          </div>
          <p class="fs-5 lh-lg text-dark">
            Program Studi Ekonomi Syariah, yang telah terakreditasi dengan predikat baik, berkomitmen untuk menghasilkan lulusan yang tidak hanya kompeten dan profesional, tetapi juga memiliki integritas tinggi dalam mengembangkan sektor ekonomi syariah...
          </p>
          <p class="mt-4 fw-semibold fst-italic text-secondary fs-5 border-start border-4 ps-3 border-primary">
            Melalui Program Studi Ekonomi Syariah, kami mengajak generasi muda untuk menjadi agen perubahan yang tak hanya menguasai ilmu ekonomi...
          </p>
          
      </div>
    </div>
  </div>
</section>

{{-- SECTION: Daftar Pengajar --}}
<section class="mt-5 pt-5 pt-sm-4 pb-5 bg-white" style="scroll-margin-top: 120px;">
  <div class="container">
    <div class="d-flex align-items-center mb-3">
      <h4 class="fw-bold mb-0">Daftar Pengajar</h4>
      <div class="flex-grow-1 border-bottom border-warning ms-3"></div>
    </div>
    <p class="fs-5 lh-lg text-dark">
      Kenalan lebih dekat dengan para dosen hebat yang siap membimbing dan menginspirasi! Mereka bukan cuma ahli di bidangnya, tetapi juga selalu terbuka untuk berbagi ilmu dan pengalaman. Yuk, kenali siapa saja yang akan menemani perjalanan belajarmu!
    </p>
    <table class="table table-bordered mt-3 fs-5 lh-lg text-dark">
      <thead class="table-light">
        <tr>
          <th>No</th>
          <th>Nama</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1.</td><td>Sugito, M.I.Kom</td></tr>
        <tr><td>2.</td><td>M.Kamal Hadi, S.E.Sy.,M.E</td></tr>
        <tr><td>3.</td><td>Lailatul Husna, S.Sy.,M.E</td></tr>
        <tr><td>4.</td><td>Lailatul Afni Rambe, M.H</td></tr>
      </tbody>
    </table>
  </div>
</section>

{{-- SECTION: Mengapa Memilih PAI --}}
<section class="pt-5 pb-5 bg-light">
  <div class="container">
    <h4 class="fw-bold mb-4 text-center">Mengapa Memilih {{ $title }}?</h4>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-journal-richtext"></i></div>
          <h6 class="fw-bold">Kurikulum Terintegrasi</h6>
          <p class="small mb-0">Kurikulum menggabungkan ilmu agama dan pendidikan modern, membentuk lulusan kompeten.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-briefcase"></i></div>
          <h6 class="fw-bold">Peluang Karir Luas</h6>
          <p class="small mb-0">Lulusan berpeluang kerja luas di berbagai bidang pendidikan dan keagamaan.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-people"></i></div>
          <h6 class="fw-bold">Jaringan Alumni Kuat</h6>
          <p class="small mb-0">Alumni tersebar luas dan siap membantu dalam pengembangan karier Anda.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-lightbulb"></i></div>
          <h6 class="fw-bold">Penelitian Berbasis Nilai</h6>
          <p class="small mb-0">Kami mendorong penelitian bernilai keislaman dan inovatif secara akademik.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
        <div class="p-4 bg-white shadow-sm rounded-3 h-100 transition hover-shadow">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-moon-stars"></i></div>
          <h6 class="fw-bold">Lingkungan Islami</h6>
          <p class="small mb-0">Lingkungan kampus kondusif membentuk karakter religius dan beretika.</p>
        </div>
      </div>
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
