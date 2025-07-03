@extends('fakultas.main')
@section('isi')

{{-- SECTION: Akreditasi --}}
<section id="next-section" class="pt-5 mb-5 bg-white">
    <div class="container">
      <div class="row">
        <!-- Teks Akreditasi -->
        <div class="col-12">
          <h2 class="fw-bold mb-4 display-6 text-primary">Akreditasi Program Studi</h2>
          <p class="fs-5 lh-lg text-dark">
            Program Studi Pendidikan Islam Anak Usia Dini telah memperoleh akreditasi dengan peringkat Baik dari BAN-PT. Pencapaian ini mencerminkan komitmen Program Studi dalam menyelenggarakan pendidikan yang bermutu, sejalan dengan visi: “Menjadi Program Studi Pendidikan Islam Anak Usia Dini yang unggul dan terkemuka dalam menghasilkan pendidik yang profesional, kreatif, dan berakhlak mulia, serta mampu mengembangkan pendidikan Islam yang berkualitas untuk anak usia dini.”</p>
            <p class="fs-5 lh-lg text-dark">Akreditasi ini menjadi pijakan penting bagi Prodi dalam terus meningkatkan mutu pendidikan, mencetak tenaga pendidik anak usia dini yang Islami, kompeten, dan siap menjawab tantangan perkembangan zaman.</p>
      </div>
    </div>
  </div>
</section>

<section class="mt-1 pb-4 bg-white">
    <div class="container">
      <!-- Profil -->
      <div class="mb-5">
        <div class="d-flex align-items-center mb-3">
            <h3 class="fw-bold mb-3">Profil Program Studi PIAUD</h3>
            <div class="flex-grow-1 border-bottom border-warning ms-3"></div>
          </div>
        <p class="fs-5 lh-lg text-dark">
          Program Studi Pendidikan Islam Anak Usia Dini (PIAUD) hadir sebagai jawaban atas kebutuhan akan tenaga pendidik yang profesional dalam mendampingi proses tumbuh kembang anak usia dini secara holistik berbasis nilai-nilai Islam.
        </p>
        <p class="fs-5 lh-lg text-dark">
          Dengan mengusung visi:
          <span class="fst-italic d-block mt-2 text-secondary mt-4 fw-semibold fst-italic fs-5 border-start border-4 ps-3 border-primary">
            “Menjadi Program Studi Pendidikan Islam Anak Usia Dini yang unggul dan terkemuka dalam menghasilkan pendidik yang profesional, kreatif, dan berakhlak mulia, serta mampu mengembangkan pendidikan Islam yang berkualitas untuk anak usia dini.”
          </span>
        </p>
        <p class="fs-5 lh-lg text-dark">
          Program Studi PIAUD berkomitmen mencetak lulusan yang tidak hanya memiliki kompetensi pedagogis dan kepribadian yang kuat, tetapi juga mampu merancang dan mengimplementasikan pembelajaran yang inovatif, menyenangkan, dan sesuai dengan karakteristik perkembangan anak.
        </p>
        <p class="fs-5 lh-lg text-dark">
          Melalui kurikulum yang terintegrasi, kegiatan akademik yang berorientasi praktik, serta dukungan tenaga pengajar berpengalaman, PIAUD siap menjadi pusat unggulan dalam mencetak pendidik anak usia dini yang siap menghadapi tantangan zaman tanpa meninggalkan nilai-nilai keislaman.
        </p>
      </div>
  
      <!-- Tujuan -->
      <div>
        <div class="d-flex align-items-center mb-3">
            <h3 class="fw-bold mb-3">Tujuan Program Studi</h3>
            <div class="flex-grow-1 border-bottom border-warning ms-3"></div>
          </div>
        <ul class="list-group list-group-flush fs-5 lh-lg text-dark">
          <li class="list-group-item">
            1. Menghasilkan pendidik anak usia dini yang profesional, berakhlak mulia, dan berdedikasi tinggi dalam mengembangkan pendidikan Islam yang berkualitas dan sesuai dengan tahap perkembangan anak.
          </li>
          <li class="list-group-item">
            2. Meningkatkan kualitas pendidikan anak usia dini berbasis Islam melalui penerapan kurikulum, strategi, dan metode pembelajaran yang inovatif, kreatif, dan menyenangkan.
          </li>
          <li class="list-group-item">
            3. Memberikan kontribusi nyata bagi masyarakat melalui kegiatan pengabdian yang dilandasi oleh keilmuan dan praktik pendidikan Islam anak usia dini.
          </li>
          <li class="list-group-item">
            4. Menjadi pusat pendidikan yang unggul dan terkemuka dalam bidang Pendidikan Islam Anak Usia Dini, baik dalam lingkup nasional maupun internasional.
          </li>
        </ul>
      </div>
    </div>
  </section>
  

{{-- SECTION: Daftar Pengajar --}}
<section class="pt-3 pb-5 bg-white">
  <div class="container">
    <div class="d-flex align-items-center mb-3">
      <h4 class="fw-bold mb-0">Daftar Pengajar</h4>
      <div class="flex-grow-1 border-bottom border-warning ms-3"></div>
    </div>
    <p clas="fs-5 lh-lg text-dark">
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
        <tr><td>1.</td><td>Nining Apriani, M.Pd</td></tr>
        <tr><td>2.</td><td>Dr. Ahmad Hafizon, M.Pd</td></tr>
        <tr><td>3.</td><td>Maimunah Ritonga, M.Pd</td></tr>
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
