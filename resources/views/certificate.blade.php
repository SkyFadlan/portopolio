<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio - Certificates">
    <title>My Portfolio - Certificates</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Header -->
    <header class="bg-primary py-5 text-white text-center">
        <h1 class="display-4 fw-bold">My Certificates</h1>
        <p class="lead">Achievements and Certifications</p>
    </header>

    <!-- Certificate Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($certificate as $row)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ $row->name }}</h5>
                            <p class="text-muted mb-1">Issued By: {{ $row->issued_by }}</p>
                            <p class="text-muted mb-1">Issued At: {{ $row->issued_at }}</p>
                            <p class="card-text">{{ $row->description }}</p>
                            @if ($row->file)
                                <a href="{{ asset('storage/' . $row->file) }}" target="_blank" class="btn btn-primary">View File</a>
                            @else
                                <p class="text-danger">No file available</p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footeruser></x-footeruser>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
