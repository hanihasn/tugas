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
                <h4 style="color: #F9478A; margin:1px;  margin-left: 20px;">CREAMEE.</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link ms-3" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link ms-3" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link ms-3" href="#">Service</a></li>
                        <li class="nav-item"><a class="nav-link ms-3" href="#">Page</a></li>
                        <li class="nav-item"><a class="nav-link ms-3" href="#">Blog</a></li>
                        <li class="nav-item"><a class="nav-link ms-3" href="#">Work</a></li>
                    </ul>
                    <a href="#" class="btn contact-button ms-4">Contact us</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Section -->
    <section>
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 main-text">
                <p class="text-muted">LITTLE SWEET EVERY DAY</p>
                <h2 class="display-5">We Build</h2>
                <p class="text-dark fs-5">New Taste For Our Client</p>
                <p class="text-muted">Best construction company slogans. A moment’s best of built. A life full of simplicity, adorning your outer world.</p>

                <!-- Buttons -->
                <div>
                    <a href="#" class="btn btn-primary" style="background-color: #FF48A4; border-color: #FF48A4;">Browse Services</a>
                    <a href="#" class="btn btn-outline-primary" style="color: #FF48A4; border-color: #FF48A4;">Contact us</a>
                </div>
            </div>

            <!-- Image -->
            <div class="col-md-6 text-center">
                <img src="https://via.placeholder.com/400x300?text=Ice+Cream+Image" alt="Ice Cream" class="img-fluid rounded">
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="py-4">
        <div class="row g-4 justify-content-center">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="product">
                    <img src="https://via.placeholder.com/80x80?text=Icon1" alt="Chocolate Ice Cream">
                    <h3 class="text-dark fs-5">Chocolate Ice cream</h3>
                    <p class="text-muted">Best construction company slogans. Adorning your outer world struct.</p>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="product">
                    <img src="https://via.placeholder.com/80x80?text=Icon2" alt="Chocobar Ice Cream">
                    <h3 class="text-dark fs-5">Chocobar Ice cream</h3>
                    <p class="text-muted">Best construction company slogans. Adorning your outer world struct.</p>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="product">
                    <img src="https://via.placeholder.com/80x80?text=Icon3" alt="Strawberry Ice Cream">
                    <h3 class="text-dark fs-5">Strawberry Ice cream</h3>
                    <p class="text-muted">Best construction company slogans. Adorning your outer world struct.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
