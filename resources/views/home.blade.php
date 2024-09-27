<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat tampilan home | creamee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        header {
            background-color: #FFEFF6;
        }
        .contact-button {
            background-color: #FF48A4;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
        }
        section {
            padding: 40px 50px;
            background-color: #FFF4FA;
        }
        .main-text h2 {
            color: #F9478A;
        }
        .product {
            background-color: #F9F9F9;
            border-radius: 15px;
            border: 2px solid #CCC;
            padding: 30px;
            text-align: center;
        }
        .product img {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <h4 style="color: #F9478A; margin:1px; margin-left: 30px;">Buku</h4>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link ms-3" href="#home">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link ms-3" href="#buku">Buku</a>
                </li>

                {{-- <li class="nav-item">
                    <a class="nav-link ms-3" href="#">Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-3" href="#">Page</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-3" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ms-3" href="#">Work</a>
                </li> --}}
            </ul>
            <a href="#" class="btn contact-button ms-4">Kontak</a>
        </div>
    </div>
</nav>

    </header>

    <!-- Main Section -->
    <section id="home">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 main-text">
                <p class="text-muted">Investasi Terbaik Adalah</p>
                <h2 class="display-5">Buku</h2>
                <p class="text-dark fs-5">Harta Yang Tak Ternilai</p>
                <p class="text-muted">Dunia Ajaib Menunggu dalam setiap Halaman Bukumu.</p>

                <!-- Buttons -->
                <div>
                    <a href="#buku" class="btn btn-primary" style="background-color: #FF48A4; border-color: #FF48A4;">Buku</a>
                    <a href="#" class="btn btn-outline-white" style="color: #FF48A4; border-color: #FF48A4;">kontak</a>
                </div>
            </div>

            <!-- Image -->
            <div class="col-md-6 text-center">
                <img src="https://via.placeholder.com/400x300?text=buku+Image" alt="buku" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="py-4">
        <div class="row g-4 justify-content-center">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="product">
                    <img src="https://via.placeholder.com/80x80?text=novel" alt="novel">
                    <h3 class="text-dark fs-5">Novel</h3>
                    <p class="text-muted">Novel adalah karangan fiksi,</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="product">
                    <img src="https://via.placeholder.com/80x80?text=komik" alt="komik">
                    <h3 class="text-dark fs-5">Komik</h3>
                    <p class="text-muted">Komik adalah seni gambar serta tulisan,</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="product">
                    <img src="https://via.placeholder.com/80x80?text=dongeng" alt="dongeng">
                    <h3 class="text-dark fs-5">Dongeng</h3>
                    <p class="text-muted">Dongeng adalah cerita rakyat </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Buku Section -->
       <section id="buku" class="container mt-5 bg-white">
            <h2 class="text-center"  style="color: #F9478A;">List Buku</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Pengarang</th>
                        <th class="text-center">Penerbit</th>
                        <th class="text-center">Tahun</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($buku as $key => $item)
                    <tr>
                        <td class="text-center">{{ $key + 1 }}</td>
                        <td class="text-center">{{ $item['judul'] }}</td>
                        <td class="text-center">{{ $item['pengarang'] }}</td>
                        <td class="text-center">{{ $item['penerbit'] }}</td>
                        <td class="text-center">{{ $item['tahun'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Tampilkan pesan dari form jika ada -->
    @if(session('message'))
        <div class="alert alert-danger mt-4" style="background-color:#faecf4; ">
            <h4>Pesan dari Form:</h4>
            <p>{{ session('message') }}</p>
        </div>
    @endif

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
