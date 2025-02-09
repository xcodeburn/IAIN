@extends('layout.main2') <!-- halaman ini menggunakan layout ini-->
@section('container2') <!-- ini yang akan dipanggil pada main.blade-->
    <div class="container about">
        <div class="content mt-3">
            <!-- Sejarah Sekolah -->
            <div class="left">
                <h2>Sekilas Tentang IAI-Rokan</h2>
                <p>Sekolah ini didirikan pada tahun 1990 dengan tujuan untuk menyediakan pendidikan berkualitas bagi anak-anak di wilayah ini. Seiring berjalannya waktu, sekolah ini berkembang pesat dengan fasilitas yang lebih lengkap dan staf pengajar yang berkompeten.</p>
            </div>
            <!-- Gambar -->
            <div class="right">
                <img src="/img/sekolah.jpg" alt="Gambar Sekolah" class="school-image">
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