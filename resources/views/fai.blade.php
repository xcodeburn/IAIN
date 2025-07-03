@extends('layout.main2')
@section('container2') <!-- ini yang akan dipanggil pada main.blade-->
<div class="fakultas-image">
    <img src="{{ '/img/1.webp' }}" alt="fakultas" srcset="{{ '/img/1.webp' }}" sizes="(max-width:600)480,(max-width:1200)800,1200">
</div>
{{-- <h2>ini untuk image section</h2> --}}
<div class="container mt-3">
    <div class="content">
        <div class="d-flex align-items-center">
            <h2>Daftar pengajar</h2>
            <div class="flex-grow-1 border-bottom border-warning ms-3" style="height:8px;"></div>
        </div>
        <p class="intro-text">
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
                    <td>Dr. Neni, M.Pd.I</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Dr. Koiy Harahap, MA</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>MHD Amin, S.HI, MH</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Abdul Hadi lubis, M.Pd</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>Dr. Syahrul Hasibuan M.Pd.I</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>Dr. Husni Mubarok, M.Pd</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>Muhammad Amin, S.HI, M.H</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>Dr. Imran Rido, S.HI, M.Pd</td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>Laela Hamidah Harahap, M.Pd</td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>Dr. Siti Halimah M.Pd</td>
                </tr>
                <tr>
                    <td>11.</td>
                    <td>Assoc. Prof. Dr. Sawaluddin, M.Pd.I</td>
                </tr>
            </tbody>
        </thead>
    </table>
    </div>
</div>
   @endsection