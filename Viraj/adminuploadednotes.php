<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Notes - Viraj Wickramasinghe</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css" />
</head>

<body class="nav-bar">
    <!--  -->
    <?php include "adminheader.php" ?>
    <!--  -->
    <div class="container-fluid">
        <div class="col-12">
            <div class="d-md-flex d-grid justify-content-center">
                <div class="d-grid p-5">
                    <button class="note-btn">Upload Notes</button>
                    <h3 class="text-center nt-text mt-4">20 <br />Notes</h3>
                </div>
                <div class="d-grid p-5">
                    <button class="prac-btn">Upload Practicles</button>
                    <h3 class="text-center nt-text mt-4">20 <br />Practicles</h3>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="d-flex justify-content-center">
        <div class="col-5 mt-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Notes"
                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><button class="btn-src"><i
                            class="fa-solid fa-magnifying-glass"></i></button></span>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col-9">
            <div class="card">
                <h5 class="card-header">Engineering technology introduction lesson - Part 1 New Note</h5>
                <div class="card-body p-3">
                    <a href="#" class="btn btn-danger">Delete</a>
                    <a href="#" class="btn btn-success">Edit</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>