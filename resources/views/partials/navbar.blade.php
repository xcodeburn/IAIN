<div class="container-fluid">
    <nav class="header-nav-ico">
        <ul class="navbar-nav ms-auto d-flex flex-row">
            <li class="nav-item mx-3">
                <a class="nav-link active" style="color: #ecd31f;" href="https://www.bankbsi.co.id">
                    <img src="{{ asset('img/bsi2.webp') }}" alt="Berita Icon" style="width: 116px; height: 38px; margin-right: 8px;">
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" style="color: #ecd31f;" href="/no-page">
                    <img src="{{ asset('img/uin.webp') }}" alt="Berita Icon" style="width: 55px; height: 50px; margin-right: 8px;">
                </a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link" style="color: #ecd31f;" href="https://unishams.edu.my">
                    <img src="{{ asset('img/unishams.webp') }}" alt="Berita Icon" style="width: 70px; height: 50px; margin-right: 8px;">
                </a>
            </li>
        </ul>
    </nav>
</div>

<nav class="navbar navbar-expand-lg bg-green">
    <div class="container-fluid" style="font-weight:500;">
        <div class="d-flex align-items-center nav1">
            <a href="" class="navbar-brand d-flex align-items-center" style="color:antiquewhite;font-size:25px;font-family: Times New Roman, Times, serif;">
                <img src="http://127.0.0.1:8000/img/IAIN.webp" alt="iair-logo">
                <span class="d-block fw-bold text-wrap">Institut Agama Islam Rokan</span><br>
            </a>
        </div>
        
        <div class="collapse navbar-collapse mou" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-3">
                    <a class="nav-link active" style="color: #ecd31f;" href="https://www.bankbsi.co.id">
                        <img src="{{ asset('img/bsi2.webp') }}" alt="Berita Icon" style="width: 116px; height: 38px; margin-right: 8px;">
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" style="color: #ecd31f;" href="/no-page">
                        <img src="{{ asset('img/uin.webp') }}" alt="Berita Icon" style="width: 55px; height: 50px; margin-right: 8px;">
                    </a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" style="color: #ecd31f;" href="https://unishams.edu.my">
                        <img src="{{ asset('img/unishams.webp') }}" alt="Berita Icon" style="width: 70px; height: 50px; margin-right: 8px;">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<img src="{{ asset('img/IAIN.webp') }}" alt="" class="iain-logo">
{{-- test dropdown --}}
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid" style="font-weight:500; text-transform:uppercase;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-lg-0">
                {{-- home --}}
                <li class="nav-item mx-3">
                    <a href="/" class="nav-link active">home</a>
                </li>
                {{-- profile --}}
                <li class="nav-item mx-3">
                    <a href="/about" class="nav-link">profil</a>
                </li>
                <!-- dropdown fakultas-->
                <li class="nav-item dropdown2">
                    <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase;" type="button" id="penerimaan" data-mdb-toggle="dropdown" aria-expanded="false">
                        fakultas
                    </button>
                    <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="penerimaan">
                        <li><a class="dropdown-item my-3" href="">Fakultas tarbiah dan keguruan (FTK)</a></li>
                        <li><a class="dropdown-item my-3" href="">fakultas ekonomi dan bisnis islam (FEBI)</a></li>
                        {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                <!-- akhir dropdown fakultas -->
                {{-- akademik --}}
                <li class="nav-item dropdown2">
                    <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase;" type="button" id="unit" data-mdb-toggle="dropdown" aria-expanded="false">
                        unit
                    </button>
                    <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="unit">
                        <li><a class="dropdown-item my-3" href="">perpustakaan dan struktural</a></li>
                        <li><a class="dropdown-item my-3" href="">mahad</a></li>
                        <li><a class="dropdown-item my-3" href="">pusat pengenbangan bisnis</a></li>
                        <li><a class="dropdown-item my-3" href="">pusat pengenbangan bahasa</a></li>
                        <li><a class="dropdown-item my-3" href="">satuan pengawas insternal</a></li>
                        <li><a class="dropdown-item my-3" href="">pelaksaan teknis</a></li>
                        <li><a class="dropdown-item my-3" href="">perencaan keuangan</a></li>
                        {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                <li class="nav-item dropdown2">
                    <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase;" type="button" id="akademik" data-mdb-toggle="dropdown" aria-expanded="false">
                        akademik
                    </button>
                    <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="akademik">
                        <li><a class="dropdown-item my-3" href="">sistem informasi akademik terpadu</a></li>
                        <li><a class="dropdown-item my-3" href="">buku pedoman akademik</a></li>
                        <li><a class="dropdown-item my-3" href="">kalender akademik</a></li>
                        <li><a class="dropdown-item my-3" href="">pedoman mahasiswa</a></li>
                        <li><a class="dropdown-item my-3" href="">berkebutuhan khusus</a></li>
                        {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                <li class="nav-item dropdown2">
                    <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase;" type="button" id="penerimaan" data-mdb-toggle="dropdown" aria-expanded="false">
                        Penerimaan
                    </button>
                    <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="penerimaan">
                        <li><a class="dropdown-item my-3" href="">jalur prestasi</a></li>
                        <li><a class="dropdown-item my-3" href="">jalur mandiri</a></li>
                        <li><a class="dropdown-item my-3" href="">jalur minat bakat</a></li>
                        {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                {{-- dropdown mahasiswa --}}
                <li class="nav-item dropdown2">
                    <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase;" type="button" id="mahasiswa" data-mdb-toggle="dropdown" aria-expanded="false">
                        Mahasiswa
                    </button>
                    <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="mahasiswa">
                        <li><a class="dropdown-item my-3" href="">organisansi intra mahasiswa</a></li>
                        <li><a class="dropdown-item my-3" href="">unit kegiatan mahasiswa</a></li>
                        <li><a class="dropdown-item my-3" href="">presatasi mahasiswa</a></li>
                        <li><a class="dropdown-item my-3" href="">KKN</a></li>
                        {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
                {{-- dropdown document --}}
                <li class="nav-item dropdown2">
                    <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase;" type="button" id="dokumen" data-mdb-toggle="dropdown" aria-expanded="false">
                        Document
                    </button>
                    <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="dokumen">
                        <li><a class="dropdown-item my-3" href="#">Repository</a></li>
                        <li><a class="dropdown-item my-3" href="#">E-Theses</a></li>
                        <li><a class="dropdown-item my-3" href="#">E-Resourses</a></li>
                        <li><a class="dropdown-item my-3" href="#">OPAC</a></li>
                        <li><a class="dropdown-item my-3" href="#">E-Jornal</a></li>
                        {{-- <li><a class="dropdown-item my-3" href="#">Something else here</a></li> --}}
                    </ul>
                </li>
            {{-- akhir dropdown --}}
            </ul>
        </div>
    </div>
</nav>
