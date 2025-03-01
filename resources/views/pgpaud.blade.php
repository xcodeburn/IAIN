@extends('layout.main2')
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
<div class="container mt-3">
    <div class="content">
        <div class="d-flex align-items-center">
        <h2>Daftar pengajar</h2>
        <div class="flex-grow-1 border-bottom border-warning ms-3" style="height:8px;"></div>
    </div>
        <p>
        Kenalan lebih dekat dengan para dosen hebat yang siap membimbing dan menginspirasi!. Mereka bukan cuma ahli dibidangnya, tetapi juga selalu terbuka untuk berbagi ilmu dan pengalaman. Yuk, kenali siapa saja yang akan menemani perjalanan berlajarmu!
    </p>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Nining Apriani, M.Pd</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Dr. Ahmad Hafizon, M.Pd</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Maimunah Ritonga, M.Pd</td>
                </tr>
            </tbody>
        </thead>
    </table>
    </div>
</div>

    {{-- profil fakultas --}}
{{-- <div class="container about">
        <div class="content mt-3"> --}}
            <!-- Sejarah Sekolah -->
            {{-- <img src="{{ asset('/img/sekolah.jpg') }}" alt="Gambar Sekolah" class="school-image">
            <div class="left">
                <h2>Sekilas Tentang IAI-Rokan</h2>
                <p>
                    Institut Agama Islam Rokan (IAIR) awalnya dikenal sebagai Sekolah Tinggi Agama Islam (STAI) Rokan Bagan Batu, yang didirikan pada 15 April 2000. Lembaga ini berkomitmen memberikan kesempatan pendidikan tinggi bagi lulusan SLTA, Pesantren, dan Madrasah. Kehadiran STAI Rokan Bagan Batu merupakan impian masyarakat Muslim di Kecamatan Bagan Sinembah serta umat Islam di Kabupaten Rokan Hilir secara umum.</p>
                <p>
                    Untuk menjaga kualitas pendidikan, IAIR memastikan bahwa seluruh dosen yang mengajar adalah profesional yang kompeten di bidangnya masing-masing. Meskipun relatif muda, IAIR Bagan Batu terus menunjukkan perkembangan yang signifikan, terbukti dengan peningkatan jumlah mahasiswa setiap tahunnya.
                </p>
                <p>
                    Saat ini, IAIR Bagan Batu mengelola empat program studi unggulan, yaitu:<br> 1) Pendidikan Agama Islam (PAI)</br><br> 2) Pendidikan Islam Anak Usia Dini (PIAUD)</br><br> 3) Pendidikan Guru Madrasah Ibtidaiyah (PGMI)</br><br> 4) Ekonomi Syariah.</br>
                </p>
            </div> --}}
            {{-- <!-- Gambar -->
            <div class="right">
                
            </div> --}}
        {{-- </div>
    </div> --}}
@endsection