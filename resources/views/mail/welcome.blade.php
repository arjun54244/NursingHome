<!doctype html>
<html lang="en">

<head>
    <title>Welcome Email</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body style="background-color: #f8f9fa; font-family: Arial, sans-serif;">
    <header style="background-color: #007bff; color: #fff; padding: 20px;">
        <h1 class="text-center">Welcome to Our Service!</h1>
    </header>
    <main class="container my-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h2 class="card-title">Hello, <span class="fw-bold">{{ $mailsubject }}</span>!</h2>
                <p class="card-text">
                    {{ $mailmessage }}
                </p>
                <p class="card-text">We're thrilled to have you on board. If you have any questions, feel free to reach out to us.</p>
                <a href="#" class="btn btn-primary mt-3">Visit Our Website</a>
            </div>
        </div>
    </main>
    <footer class="text-center py-3" style="background-color: #f1f1f1;">
        <p class="mb-0">&copy; {{ date('Y') }} Our Company. All rights reserved.</p>
        <small>1234 Street Name, City, Country</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
