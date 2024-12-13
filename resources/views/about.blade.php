<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>About</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core Theme CSS (Includes Bootstrap) -->
    <link href="{{ asset('asset-landing-page/css/styles2.css') }}" rel="stylesheet" />
</head>
<style>
    /* General Styles */
body {
    font-family: 'Roboto', sans-serif;
    line-height: 1.6;
}

/* Header Section */
header {
    background: linear-gradient(to right, #6a11cb, #2575fc);
    color: white;
    padding: 100px 0;
    text-align: center;
}

header .fw-bolder {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
}

header .lead {
    font-size: 1.1rem;
    color: white; /* Mengubah warna teks deskripsi menjadi lebih gelap */
    margin-bottom: 1.5rem;
}

/* Memperbaiki gaya teks di dalam <p> */
header p {
    color: white; /* Warna teks yang lebih gelap untuk deskripsi */
    font-size: 1.2rem; /* Ukuran font sedikit lebih besar */
    line-height: 1.8; /* Menambah jarak antar baris agar lebih mudah dibaca */
    margin-bottom: 1.5rem;
}

header a.btn-primary {
    background-color: #2575fc;
    border: none;
    padding: 10px 20px;
    font-size: 1.1rem;
    border-radius: 50px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

header a.btn-primary:hover {
    background-color: #1a5bb8;
    transform: scale(1.05);
}

/* Footer Section */
x-footeruser {
    background-color: #333;
    color: white;
    padding: 20px 0;
    text-align: center;
}

x-footeruser a {
    color: #2575fc;
    text-decoration: none;
    transition: color 0.3s ease;
}

x-footeruser a:hover {
    color: #6a11cb;
}

/* Button Hover Effects */
.btn-lg:hover {
    background-color: #6a11cb !important;
    color: white !important;
}

/* Responsive Design */
@media (max-width: 768px) {
    header {
        padding: 70px 0;
    }

    header .fw-bolder {
        font-size: 2rem;
    }

    header .lead {
        font-size: 1rem;
    }
}

</style>
<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation -->
        <x-navbar></x-navbar>

        <!-- Header Section -->
        <header class="py-5">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        @foreach ($about as $row)
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3">{{ $row->title }}</h1>
                            <p class="lead fw-normal">{{ $row->description }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Footer -->
        <x-footeruser></x-footeruser>
    </main>
</body>
</html>
