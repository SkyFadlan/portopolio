<style>
/* Navbar styles */
.navbar {
    background-color: #ffffff; /* Latar belakang putih */
    border-bottom: 2px solid #4caf50; /* Garis bawah hijau segar */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan halus */
}

.navbar-brand {
    color: #4caf50 !important; /* Warna hijau segar untuk brand */
    font-weight: bold;
    font-size: 1.6rem;
    text-transform: uppercase;
}

.navbar-brand:hover {
    color: #388e3c !important; /* Hijau lebih gelap saat hover */
}

.navbar-nav .nav-link {
    color: #6c757d; /* Warna abu-abu gelap untuk teks */
    font-weight: 500;
    margin-right: 15px; /* Jarak antar menu */
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #4caf50; /* Hijau segar saat hover */
    text-decoration: underline; /* Tambahkan garis bawah saat hover */
}

.navbar-nav .active {
    color: #4caf50 !important; /* Warna hijau untuk halaman aktif */
    font-weight: bold;
}

.auth-buttons .btn {
    color: #fff;
    background-color: #4caf50; /* Hijau cerah */
    border: none;
    padding: 8px 16px;
    border-radius: 5px; /* Tombol dengan sudut melengkung */
    transition: background-color 0.3s ease, transform 0.2s;
}

.auth-buttons .btn:hover {
    background-color: #388e3c; /* Hijau lebih gelap saat hover */
    transform: scale(1.05); /* Sedikit membesar saat hover */
}

/* Responsif */
.navbar-toggler {
    border-color: #4caf50;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 128, 0, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

/* Tambahan styling untuk aksesibilitas */
.navbar-nav .nav-link:focus {
    outline: 2px solid #4caf50;
    outline-offset: 2px;
}

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
 <link href="{{ asset('asset-landing-page/css/styles2.css') }}" rel="stylesheet" />
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-5">
        <a class="navbar-brand" href="{{ route('home') }}">Portofolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('skill') }}">Skill</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('project') }}">Project</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('certificate') }}">Certificate</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
        @guest 
        <!-- Untuk Login dan Register -->
        <div class="auth-buttons">
            <a href="{{ route('login') }}" class="btn btn-primary btn-sm">Login</a>
        </div>
                    @endguest
    </div>
</nav>
