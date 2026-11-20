<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Beranda - MUHAMMAD FAKIH SADID</title>

    <!-- Panggil Vite (Bootstrap + CSS Kustom dari app.scss) -->
    @vite('resources/sass/app.scss')

    <!-- Bootstrap JS (CDN) - agar navbar toggler jalan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-md bg-ink" data-bs-theme="dark" aria-label="Menu utama">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/web_statis') }}">Fakih Sadid</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama" aria-controls="menuUtama" aria-expanded="false" aria-label="Buka menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuUtama">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/web_statis') }}" aria-current="page">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_tentang') }}">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_portofolio') }}">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_kontak') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        <div class="container py-5">
            <section class="row align-items-center g-4 g-md-5 mb-5">
                <div class="col-md-4 text-center">
                    <!-- Panggil Gambar via asset() -->
                    <img src="{{ asset('tugas_fakih/img/foto-profil.jpg') }}" alt="Foto Muhammad Fakih Sadid" class="foto img-fluid">
                </div>
                <div class="col-md-8">
                    <h1 class="display-5">Muhammad Fakih Sadid</h1>
                    <p class="text-secondary">NIM 108052500155</p>
                    <p class="fs-5">Mahasiswa yang sedang mendalami sistem dan jaringan komputer. Saya belajar membangun server sendiri, dari konfigurasi DNS dan web server sampai menerbitkan website di jaringan lokal.</p>
                    <div class="d-flex flex-column flex-sm-row gap-2">
                        <a class="btn btn-teal btn-lg" href="{{ url('/web_portofolio') }}">Lihat portofolio</a>
                        <a class="btn btn-outline-ink btn-lg" href="{{ url('/web_kontak') }}">Hubungi saya</a>
                    </div>
                </div>
            </section>

            <section>
                <h2 class="mb-4">Yang sedang saya kerjakan</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col"><div class="card item h-100"><div class="card-body"><h3 class="h5 card-title">Server sendiri</h3><p class="card-text mb-0">Rocky Linux dengan Nginx dan BIND dalam satu mesin virtual.</p></div></div></div>
                    <div class="col"><div class="card item h-100"><div class="card-body"><h3 class="h5 card-title">Website statis</h3><p class="card-text mb-0">Halaman ini dibuat dengan HTML, CSS, dan Bootstrap, lalu diterbitkan online.</p></div></div></div>
                    <div class="col"><div class="card item h-100"><div class="card-body"><h3 class="h5 card-title">Belajar Bootstrap</h3><p class="card-text mb-0">Grid, navbar, kartu, dan komponen responsif lewat praktikum modul 7.</p></div></div></div>
                </div>
            </section>
        </div>
    </main>

    <footer class="bg-ink text-center py-4">
        <div class="container">
            <p class="mb-1 text-white fw-semibold">MUHAMMAD FAKIH SADID_108052500155</p>
            <p class="mb-0 small">Dibuat dengan Bootstrap 5 &middot; Tugas Praktikum Pengembangan Aplikasi Web, Modul 7</p>
        </div>
    </footer>
</body>
</html>
