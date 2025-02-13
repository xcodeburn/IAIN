@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
<style>
    img {
    /* width: 100%; */
    max-width: 520px;
    float: right ;
    height: auto;
    border-radius: 8px;
}
</style>
@section('container2') <!-- ini yang akan dipanggil pada main.blade-->
    <div class="container about">
        <div class="content mt-3">
            <!-- Sejarah Sekolah -->
            <img src="/img/sekolah.jpg" alt="Gambar Sekolah" class="school-image">
            <div class="left">
                <h2>Sekilas Tentang IAI-Rokan</h2>
                <p>
                    Institut Agama Islam Rokan (IAIR) awalnya dikenal sebagai Sekolah Tinggi Agama Islam (STAI) Rokan Bagan Batu, yang didirikan pada 15 April 2000. Lembaga ini berkomitmen memberikan kesempatan pendidikan tinggi bagi lulusan SLTA, Pesantren, dan Madrasah. Kehadiran STAI Rokan Bagan Batu merupakan impian masyarakat Muslim di Kecamatan Bagan Sinembah serta umat Islam di Kabupaten Rokan Hilir secara umum.</p>
                <p>
                    Untuk menjaga kualitas pendidikan, IAIR memastikan bahwa seluruh dosen yang mengajar adalah profesional yang kompeten di bidangnya masing-masing. Meskipun relatif muda, IAIR Bagan Batu terus menunjukkan perkembangan yang signifikan, terbukti dengan peningkatan jumlah mahasiswa setiap tahunnya.
                </p>
                <p>
                    Saat ini, IAIR Bagan Batu mengelola empat program studi unggulan, yaitu:<br> 1) Pendidikan Agama Islam (PAI)</br><br> 2) Pendidikan Islam Anak Usia Dini (PIAUD)</br><br> 3) Pendidikan Guru Madrasah Ibtidaiyah (PGMI)></br><br> 4) Ekonomi Syariah.</br>
                </p>
            </div>
            <!-- Gambar -->
            <div class="right">
                
            </div>
        </div>
    
        <!-- Visi dan Misi -->
        <div class="vision-mission">
            <h2>Visi IAI-Rokan</h2>
            <p style="font-size: 24px">" mewujudkan Institut Agama Islam Rokan bagan batu, Unggul moderat dan kreatif di kabupaten Rokan Hilir Provinsi Riau tahun 2030."</p>
            <h2  style="margin-top: 30px">Misi IAI-Rokan</h2>
            <div class="misi">
                <p>1. Menghasilkan sarjana dibidang ilmu-ilmu keislaman dan unggul dalam kajian maateri, penelitian, dan pengabdian kepada masyarakat.</p>
                <p>2. menghasilkakn sarjana yang mampu mewujudkan Civil Society</p>
                <p>3. menghasilkan sarjana yang memiliki karakter dan sikap toleran</p>
            </div>
        </div>
    </div>
<h2>{{ $title == 'abou' ? 'ini about' : ''}}</h2>
@endsection