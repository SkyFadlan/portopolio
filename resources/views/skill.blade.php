<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('asset-landing-page/css/styles2.css') }}" rel="stylesheet" />
    <style>
        /* Gaya untuk container skill */
        .skill-container {
            margin-top: 30px;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Judul halaman skill */
        .skill-container h1 {
            color: #4caf50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        /* Gaya untuk grid skill */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px; /* Memberi jarak antar item */
        }

        /* Gaya untuk item skill */
        .skill-item {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect */
        .skill-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Nama skill */
        .skill-name {
            font-weight: bold;
            color: #333;
            margin-top: 10px;
            font-size: 1.2rem;
        }

        /* Gambar skill */
        .skill-item img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .skill-container {
                padding: 20px;
            }

            .skill-container h1 {
                font-size: 1.5rem;
            }

            .skill-item {
                padding: 15px;
            }

            .skill-name {
                font-size: 1rem;
            }

            .skill-item img {
                width: 80px;
                height: 80px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <x-navbar></x-navbar>

    <!-- Content Skill -->
    <div class="skill-container">
        <h1>My Skills</h1>
        <div class="skills-grid">
            @foreach ($skill as $row)
                <div class="skill-item">
                    <img src="{{ Storage::url($row->file) }}" alt="{{ $row->name }}">
                    <span class="skill-name">{{ $row->name }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
