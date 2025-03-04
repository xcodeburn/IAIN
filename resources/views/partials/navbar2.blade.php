<nav class="navbar navbar-expand-lg bg-green">
    <div class="container" style="font-weight:500;">
            
            <!-- <a class="navbar-brand" style="color: #ecd31f;" href="#">IAIN</a> -->
            
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <div class="d-flex align-items-center">
                    <a href="" class="navbar-brand d-flex align-items-center" style='color:white;font-family:Arial, Helvetica, sans-serif'>
                        <img src="{{ asset('img/IAIN.webp') }}" alt="" class="me-2" width="50" height="70">
                            <span class="d-block fw-bold text-wrap"> Institut Agama Islam Rokan</span>
                            {{-- <span class="d-block fw-bold">Rokan</span> --}}
                    </a>
                </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item mx-3">
                <a class="nav-link {{$title == 'home' ? 'active' : ''}}" style="color: #ecd31f;" href="/">Sistem Informasi</a>
                <!-- Jika tekan tombol home (title == home), maka kasih tanda -->
                </li>
                <li class="nav-item mx-3">
                <a class="nav-link {{ $title == 'blog' ? 'active' : ''}}" style="color: #ecd31f;" href="https://pddikti.kemdiktisaintek.go.id/detail-pt/5g-7GwggR6Vj645L1_I6wBtQpsEvU1QiKCIlZDXW-4F8kxClI2qdcKnEHMh5kyOEU0FtCA==">PDDIKTI</a>
                </li>
                <li class="nav-item mx-3">
                <a class="nav-link {{ $title == 'about' ? 'active' : ''}}" style="color: #ecd31f;" href="/no-page">Aduan & Saran</a>
                </li>
            </ul>
            </div>
        </div>
</nav>
{{-- <img src="img/IAIN.webp" alt="" class="iain-logo"> --}}
<nav class="navbar navbar-expand-lg" style="background-color: #E7E7E7">
    <div class="container hv" style="font-weight:500; text-transform:uppercase;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-lg-0">
        <li class="nav-item mx-3">
            <a href="/" class="nav-link active">home</a>
        </li>
        <li class="nav-item mx-3">
            <a href="/about" class="nav-link active">profil</a>
        </li>
       <!-- dropdown -->
       {{-- <div class="dropdown2" style="font-weight: 500;text-transform:lowecase;">
            <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase; type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                fakultas
            </button>
            <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item my-3" href="/fakultas">Fakultas tarbiah dan keguruan (FTK)</a></li>
                <li><a class="dropdown-item my-3" href="">fakultas ekonomi dan bisnis islam (FEBI)</a></li>
                {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
            {{-- </ul>
        </div> --}}
        {{-- test --}}
        <li class="nav-item dropdown3">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            fakultas
          </a>
            <ul class="dropdown-menu" style="text-transform: capitalize;" aria-labelledby="navbarDropdown">
                <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Fakultas tarbiah dan keguruan (FTK)
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="/fai">S1 - Pendidikan Agama Islam (FAI)</a></li>
                            <li><a class="dropdown-item" href="/pgsd">S1 - Pendidikan Guru Agama Madrasah Ibtidaiyah (PGMI/PGSD)</a></li>
                            <li><a class="dropdown-item" href="/pgpaud">S1 - Pendidikan Islam Anak Usia Dini (PIAUD/PGPAUD)</a></li>
                        </ul>
                </li>
                <li class="nav-item dropend">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        fakultas ekonomi dan bisnis islam (FEBI)
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item" href="/ekonomi">S1 - Ekonomi Syariah</a></li>
                        </ul>
                </li>
            </ul>
        </li>
       <!-- dropdown -->
        <li class="nav-item mx-3">
            <a href="/no-page" class="nav-link">Akademik</a>
        </li>
        <div class="dropdown2" style="font-weight: 500;text-transform:lowecase;">
            <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase; type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                Mahasiswa
            </button>
            <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item my-3" href="">PMB Mandiri</a></li>
                <li><a class="dropdown-item my-3" href="">Registrasi Mahasiswa Baru</a></li>
                <li><a class="dropdown-item my-3" href="">Beasiswa</a></li>
                {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
            </ul>
        </div>
        <div class="dropdown2" style="font-weight: 500;text-transform:lowecase;">
            <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase; type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                Document
            </button>
            <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item my-3" href="#">Repository</a></li>
                <li><a class="dropdown-item my-3" href="#">E-Theses</a></li>
                <li><a class="dropdown-item my-3" href="#">E-Resourses</a></li>
                <li><a class="dropdown-item my-3" href="#">OPAC</a></li>
                <li><a class="dropdown-item my-3" href="#">E-Jornal</a></li>
                {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
            </ul>
        </div>
    </ul>
    </div>
</nav>