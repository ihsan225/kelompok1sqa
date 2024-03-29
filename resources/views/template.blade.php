<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* CSS tambahan */
    .navbar-logo {
        margin-right: auto;
    }

    .navbar-brand img {
        height: 40px;
        /* Ubah sesuai kebutuhan */
        width: auto;
    }

    .content {
        min-height: 60vh;
        /* Atur tinggi konten 80% dari viewport height */
        padding: 50px 0;
        /* Atur jarak atas dan bawah sesuai kebutuhan */
        text-align: center;
    }

    .footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand navbar-logo" href="home">
            <img src="path/to/logo.png" alt="Company Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Service</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <p>&copy; Santechmediakom @2024</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>