<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body>
    <!-- Navbar copy for other pages -->
    <nav class="navbar navbar-expand-sm navbar bg-success">
        <div class="container-xxl">
            <!-- Logo -->
            <a class="navbar-brand" href="contact">
                <img src="images/University_of_Idaho_seal.png" alt="Logo" style="width: 60px; height: 60px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="photos">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="terms">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Contact Content -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center p-4" style="background-color: rgb(184, 0, 0); height: 100px;">
                <h1>enter info below</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 p-4" style="background-color: goldenrod; min-height: 500px;">
                <form action="/action_page.php">
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name:</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Enter first name"
                            name="firstName">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name:</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Enter last name"
                            name="lastName">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5">
        <div class="container">
            <p>This is my footer</p>
            <p>Privacy | Cookies | Security</p>
        </div>
    </footer>

</body>

</html>