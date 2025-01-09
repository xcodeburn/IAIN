<nav class="navbar navbar-expand-lg bg-green">
        <div class="container">
            <!-- <a class="navbar-brand" style="color: #ecd31f;" href="#">IAIN</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
        </li>    
            <li class="nav-item">
                <a class="nav-link {{ ($title === "home") ? 'active' : ''}}" style="color: #ecd31f;" href="/">Home</a>
                <!-- Jika tekan tombol home (title == home), maka kasih tanda -->
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === "blog") ? 'active' : ''}}"" style="color: #ecd31f;" href="/blog">Gallery</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link {{ ($title === "about") ? 'active' : ''}}"" style="color: #ecd31f;" href="/about">Contact</a>
                </li>
            </ul>
            <i class="fa fa-search" style="font-size:20px"></i>   
            </div>
        </div>
</nav>