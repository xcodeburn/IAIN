<nav class="navbar navbar-expand-lg bg-green">
        
    <div class="container" style="font-weight:500;">
            
            <!-- <a class="navbar-brand" style="color: #ecd31f;" href="#">IAIN</a> -->
            
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
                <div class="d-flex align-items-center">
                    <a href="" class="navbar-brand d-flex align-items-center" style='color:white;font-family:Arial, Helvetica, sans-serif'>
                        <img src="img/IAIN.png" alt="" class="me-2" width="50" height="70">
                        <div>
                            <span class="d-block fw-bold">Institut</span>
                            <span class="d-block fw-bold">Agama Islam Rokan</span>
                            {{-- <span class="d-block fw-bold">Rokan</span> --}}
                        </div>
                    </a>
                </div>
                
            <ul class="navbar-nav ms-auto">
                   
            <li class="nav-item mx-3">
                <a class="nav-link {{$title == 'home' ? 'active' : ''}}" style="color: #ecd31f;" href="/">Sistem Informasi</a>
                <!-- Jika tekan tombol home (title == home), maka kasih tanda -->
                </li>
                <li class="nav-item mx-3">
                <a class="nav-link {{ $title == 'blog' ? 'active' : ''}}" style="color: #ecd31f;" href="/blog">PDDIKTI</a>
                </li>
                <li class="nav-item mx-3">
                <a class="nav-link {{ $title == 'about' ? 'active' : ''}}" style="color: #ecd31f;" href="/about">Aduan & Saran</a>
                </li>
            </ul>
            <i class="fa fa-search" style="font-size:20px"></i>   
            </div>
        </div>
</nav>
{{-- <img src="img/IAIN.png" alt="" class="iain-logo"> --}}
<nav class="navbar navbar-expand-lg">
    <div class="container" style="font-weight:500; text-transform:uppercase;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-lg-0">
        <li class="nav-item mx-3">
            <a href="" class="nav-link active">home</a>
        </li>
        <li class="nav-item mx-3">
            <a href="" class="nav-link active">profil</a>
        </li>
       <!-- dropdown -->
       <div class="dropdown2" style="font-weight: 500;text-transform:lowecase;">
            <button data-mdb-button-init data-mdb-ripple-init data-mdb-dropdown-init class="btn dropdown-toggle" style="font-weight: 500;text-transform:uppercase; type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                fakultas
            </button>
            <ul class="dropdown-menu" style="color:#fff;" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item my-3" href="#">Action</a></li>
                <li><a class="dropdown-item my-3" href="#">Another action</a></li>
                <li><a class="dropdown-item my-3" href="#">Something else here</a></li>
            </ul>
        </div>
       <!-- dropdown -->
        <li class="nav-item mx-3">
            <a href="" class="nav-link">unit</a>
        </li>
        <li class="nav-item mx-3">
            <a href="" class="nav-link">akademik</a>
        </li>
        <li class="nav-item mx-3">
            <a href="" class="nav-link">penerimaan</a>
        </li>
        <li class="nav-item mx-3">
            <a href="" class="nav-link">mahasiswa</a>
        </li>
        <li class="nav-item mx-3">
            <a href="" class="nav-link">penerimaan</a>
        </li>
    </ul>
    </div>
</nav>