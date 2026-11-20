<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio - MUHAMMAD FAKIH SADID_108052500155</title>

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
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/web_portofolio') }}" aria-current="page">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_kontak') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        <div class="container py-5">
            <h1>Portofolio</h1>
            <p class="text-secondary">Proyek dan tugas kuliah yang pernah saya kerjakan.</p>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-1">
                    <div class="col">
                        <div class="card item h-100">
                            <div class="card-body">
                                <h3 class="h5 card-title"><i class="bi bi-hdd-network text-teal me-2"></i>Web Server dan DNS Server</h3>
                                <p class="card-text">Nginx dan BIND di satu VM Rocky Linux. Website dibuka lewat nama domain lokal dari host Windows.</p>
                                <span class="badge rounded-pill tag me-1">Nginx</span><span class="badge rounded-pill tag me-1">BIND</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card item h-100">
                            <div class="card-body">
                                <h3 class="h5 card-title"><i class="bi bi-bootstrap text-teal me-2"></i>Klon situs Bootstrap</h3>
                                <p class="card-text">Praktikum modul 7: navbar offcanvas, hero, section ikon dan tema, serta footer memakai Bootstrap 5.</p>
                                <span class="badge rounded-pill tag me-1">Bootstrap</span><span class="badge rounded-pill tag me-1">HTML</span><span class="badge rounded-pill tag me-1">CSS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card item h-100">
                            <div class="card-body">
                                <h3 class="h5 card-title"><i class="bi bi-person-badge text-teal me-2"></i>Website portofolio</h3>
                                <p class="card-text">Situs empat halaman ini, dibuat dengan grid, navbar, kartu, dan badge Bootstrap.</p>
                                <span class="badge rounded-pill tag me-1">Bootstrap</span><span class="badge rounded-pill tag me-1">Responsive</span>
                            </div>
                        </div>
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
