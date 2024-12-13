<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio - Projects">
    <title>My Portfolio - Projects</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f8f9fa; /* Warna latar belakang cerah */
    color: #333;
}

/* Navbar */
.navbar {
    background-color: #007bff; /* Warna biru sama dengan header */
    border-bottom: 2px solid #0056b3; /* Garis bawah biru gelap */
}

/* Header Section */
header {
    background-color: #007bff; /* Warna biru cerah */
    color: white;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Bayangan pada teks */
}

/* Project Section */
section {
    display: flex;
    justify-content: center; /* Proyek dimulai dari tengah */
    align-items: center; 
    flex-direction: column; /* Agar elemen berbaris vertikal */
    padding: 3rem 0; /* Jarak atas dan bawah */
}

.container {
    max-width: 960px; /* Maksimal lebar kontainer */
}

/* Project Card */
.card {
    border: none; /* Hapus border default */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan lembut */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animasi */
}

.card:hover {
    transform: translateY(-5px); /* Naik sedikit saat hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan lebih tajam */
}

.card-title {
    color: #007bff; /* Warna biru untuk judul proyek */
    font-weight: bold;
}

.card-text {
    color: #555; /* Warna teks deskripsi */
}

.btn-primary {
    background-color: #007bff;
    border: none;
    transition: background-color 0.3s ease, transform 0.2s ease; /* Animasi hover */
}

.btn-primary:hover {
    background-color: #0056b3; /* Biru lebih gelap saat hover */
    transform: scale(1.05); /* Membesar sedikit saat hover */
}

/* Footer */
footer {
    background-color: #343a40; /* Warna abu-abu gelap */
    color: white;
    border-top: 3px solid #007bff; /* Garis biru di atas footer */
}

/* Responsive Design */
@media (max-width: 768px) {
    .card {
        margin-bottom: 1.5rem; /* Tambahkan jarak antar kartu */
    }

    header h1 {
        font-size: 2rem;
    }

    header p {
        font-size: 1rem;
    }
}

</style>
<body>
    <!-- Navbar -->
<x-navbar></x-navbar>

    <!-- Header -->
    <header class="bg-primary py-5 text-white text-center">
        <h1 class="display-4 fw-bold">My Projects</h1>
        <p class="lead">Explore some of my best web development projects</p>
    </header>

    <!-- Project Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ( $project as $row )
                    
                <!-- Project Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $row->name }}</h5>
                            <p class="card-text">{{ $row->description }}</p>
                            <a href="{{ $row->link }}" target="_blank" class="btn btn-primary">Visit Project</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 text-center">
        <p>&copy; 2024 My Portfolio. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
