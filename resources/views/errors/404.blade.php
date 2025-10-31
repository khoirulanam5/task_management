<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not Found</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
        body {
            background: linear-gradient(135deg, #e8f1ff, #f4f7fa);
            min-height: 100vh;
        }
        .floating-img {
            animation: float 3s ease-in-out infinite;
            width: 300px;
        }
        .btn-home {
            padding: 10px 25px;
            border-radius: 50px;
            font-size: 18px;
        }
        .error-title {
            font-weight: 800;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

    <div class="text-center p-3">
        <img src="https://yemca-services.net/404.png" class="floating-img mb-4" alt="404">

        <h1 class="error-title display-4 text-primary">Oops! Page Not Found</h1>
        <p class="text-muted fs-5 mb-4">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>

        <a href="{{ url('/') }}" class="btn btn-primary btn-home shadow-sm">
            Go Back Home
        </a>
    </div>

</body>
</html>
