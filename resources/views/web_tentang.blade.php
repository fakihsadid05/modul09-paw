<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang - MUHAMMAD FAKIH SADID_108052500155</title>

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
                        <li class="nav-item"><a class="nav-link active" href="{{ url('/web_tentang') }}" aria-current="page">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_portofolio') }}">Portofolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/web_kontak') }}">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="flex-grow-1">
        <div class="container py-5">
            <h1 class="mb-4">Tentang saya</h1>

            <section class="mb-5">
                <h2>Pendidikan</h2>
                <dl class="row">
                    <dt class="col-sm-3">Perguruan tinggi</dt><dd class="col-sm-9 text-secondary">Telkom University Surabaya, S1 Sistem Informasi</dd>
                    <dt class="col-sm-3">Angkatan</dt><dd class="col-sm-9 text-secondary">2025</dd>
                </dl>
            </section>

            <section class="mb-5">
                <h2>Keahlian</h2>
                <div class="d-flex flex-wrap gap-2">
                    <span class="badge rounded-pill tag">Linux (Rocky)</span>
                    <span class="badge rounded-pill tag">Nginx</span>
                    <span class="badge rounded-pill tag">DNS (BIND)</span>
                    <span class="badge rounded-pill tag">HTML &amp; CSS</span>
                    <span class="badge rounded-pill tag">Bootstrap 5</span>
                    <span class="badge rounded-pill tag">VMware</span>
                </div>
            </section>

            <section>
                <h2>Minat</h2>
                <p class="mw-text">Administrasi server, jaringan komputer, dan pengembangan web. Ganti kalimat ini dengan minatmu yang sebenarnya.</p>
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
