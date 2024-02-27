<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <title>photos</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar bg-success">
        <div class="container-xxl">
            <!-- Logo -->
            <a class="navbar-brand" href="photos">
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
                        <a class="nav-link" href="terms">Links</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center p-4" style="background-color: lemonchiffon; height: 100px;">
                <h1>Photos</h1>
            </div>
        </div>
        <div class="row">
            <!-- First Button -->
            <div class="col-md-4">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal1">
                    <img src="images/mini.jpg" alt="Mini Image" class="img-fluid">
                </button>
            </div>

            <!-- Second Button -->
            <div class="col-md-4">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal2">
                    <img src="images/water tower.jpg" alt="Water Tower" class="img-fluid">
                </button>
            </div>

            <!-- Third Button -->
            <div class="col-md-4">
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal3">
                    <img src="images/campus.jpg" alt="Campus" class="img-fluid">
                </button>
            </div>
        </div>
    </div>

    <!-- image pop outs -->
    <!-- First Button -->
    <div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                
                <div class="modal-body">
                        <img src="<?php echo e(asset('images/mini.jpg')); ?>" class="img-fluid gallery-img" alt="miniature">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Button -->
    <div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                <img src="<?php echo e(asset('images/water tower.jpg')); ?>" class="img-fluid gallery-img" alt=" waber tow">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo e(asset('campus.jpg')); ?>" class="img-fluid gallery-img" alt="Uidaho Campus">

    <!-- Third Button -->
    <div class="modal fade" id="myModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="<?php echo e(asset('images/campus.jpg')); ?>" class="img-fluid gallery-img" alt="Uidaho Campus">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



</body>

</html><?php /**PATH C:\xampp\htdocs\lab5\resources\views/photos.blade.php ENDPATH**/ ?>