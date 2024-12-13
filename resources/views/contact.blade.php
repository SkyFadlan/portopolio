<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Contact</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <style>
        /* General Styles */
body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background-color: #f8f9fa; /* Warna latar belakang cerah */
    color: #333; /* Warna teks utama */
}

/* Navbar */
.navbar {
    background-color: #007bff; /* Warna biru utama */
    border-bottom: 2px solid #0056b3; /* Garis bawah biru gelap */
}

/* Section Background */
section {
    background-color: #ffffff; /* Warna latar belakang putih */
    padding: 2rem 0;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
}

/* Form Styles */
form {
    background-color: #f8f9fa; /* Warna latar belakang form */
    border-radius: 0.5rem; /* Sudut membulat */
    padding: 2rem;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
}

/* Input Fields */
.form-control {
    border: 1px solid #ddd; /* Warna border ringan */
    border-radius: 0.25rem;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
    border-color: #007bff; /* Warna biru fokus */
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Bayangan fokus */
}

/* Labels */
label {
    color: #555; /* Warna teks label */
}

/* Submit Button */
.btn-primary {
    background-color: #007bff;
    border: none;
    font-size: 1rem;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-primary:hover {
    background-color: #0056b3; /* Biru lebih gelap saat hover */
    transform: scale(1.05); /* Sedikit membesar saat hover */
}

/* Success and Error Messages */
#submitSuccessMessage, #submitErrorMessage {
    font-size: 1rem;
    margin-top: 1rem;
}

/* Contact Cards */
.feature {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    font-size: 1.5rem;
    background-color: #007bff; /* Warna biru */
    color: #ffffff;
    border-radius: 50%; /* Bentuk bulat */
    margin-bottom: 1rem;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Bayangan lembut */
}

.text-muted {
    color: #6c757d !important; /* Warna teks ringan */
}

/* Footer */
footer {
    background-color: #343a40; /* Warna abu-abu gelap */
    color: #ffffff; /* Warna teks putih */
    border-top: 3px solid #007bff; /* Garis atas biru */
    text-align: center;
    padding: 1.5rem 0;
}

    </style>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
        <x-navbar></x-navbar>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Reach Out to Me</h1>
                            <p class="lead fw-normal text-muted mb-0">Have questions or need assistance? Get in touch with me directly. I look forward to hearing from you and will respond as soon as possible!</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->
                                <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" />
                        </div>
                        <div class="mb-3">
                            <label for="socialmedia" class="form-label">Social Media</label>
                            <input type="text" class="form-control" name="socialmedia" id="socialmedia" />
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                            </div>
                        </div>
                    </div>
                    <!-- Contact cards-->
                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <div class="h5">Instagram</div>
                            <p class="text-muted mb-0">@Zenaki313</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                            <div class="h5">My Email</div>
                            <p class="text-muted mb-0">fadlanalanshori@gmail.com</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
<x-footeruser></x-footeruser>