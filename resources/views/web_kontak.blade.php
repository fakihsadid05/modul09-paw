<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontak - MUHAMMAD FAKIH SADID_108052500155</title>

    <!-- Panggil Vite (Bootstrap + CSS Kustom) -->
    @vite('resources/sass/app.scss')

    <!-- Bootstrap JS (CDN) -->
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
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_statis') }}">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_tentang') }}">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_portofolio') }}">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/web_kontak') }}" aria-current="page">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        <div class="container py-5">
            <h1 class="mb-4">Kontak</h1>

            <div class="row">
                <div class="col-lg-7">
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-center gap-3 py-3"><i class="bi bi-envelope-fill fs-4 text-teal"></i><div><div class="small text-secondary">Email kampus</div><div>nim@mahasiswa.kampus.ac.id</div></div></li>
                        <li class="list-group-item d-flex align-items-center gap-3 py-3"><i class="bi bi-github fs-4 text-teal"></i><div><div class="small text-secondary">GitHub</div><div>github.com/username</div></div></li>
                        <li class="list-group-item d-flex align-items-center gap-3 py-3"><i class="bi bi-linkedin fs-4 text-teal"></i><div><div class="small text-secondary">LinkedIn</div><div>linkedin.com/in/username</div></div></li>
                    </ul>
                </div>
            </div>
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
