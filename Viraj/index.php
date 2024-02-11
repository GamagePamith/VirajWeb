<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css" />
    <title>Engineering Technology</title>
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
</head>

<body>
    <div id="carouselExampleCaptions" class="carousel slide mb-3">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="resources/up-img.png" class="d-block w-100" alt="img1">
                <div class="carousel-caption d-grid justify-content-center align-items-center">
                    <h5 class="eng-txt">ENGINEERING</h5>
                    <h5 class="tech-txt">TECHNOLOGY</h5>
                    <p class="long-txt">Popular ET class Sri Lanka Viraj Wickramasinghe</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="resources/up-img-2.png" class="d-block w-100" alt="img2">
                <div class="carousel-caption ">
                    <h5 class="eng-txt">ENGINEERING</h5>
                    <h5 class="tech-txt">TECHNOLOGY</h5>
                    <p class="long-txt">Popular ET class Sri Lanka Viraj Wickramasinghe</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="resources/up-img-3.png" class="d-block w-100" alt="img3">
                <div class="carousel-caption ">
                    <h5 class="eng-txt">ENGINEERING</h5>
                    <h5 class="tech-txt">TECHNOLOGY</h5>
                    <p class="long-txt">Popular ET class Sri Lanka Viraj Wickramasinghe</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Nav Start -->
    <?php include "header.php"; ?>
    <!-- ------------------------------------------ -->
    <div class=" container-fluid">
        <div class="col-12 d-md-flex justify-content-center">
            <!--  -->
            <div class="row">
                <div class="col-12 mt-5 offset-md-1 content-one">
                    <h2 class="welcome-txt text-center text-lg-start">WELCOME</h2>
                    <h4 class="sec-txt text-center text-lg-start">WAY TO SUCCESS</h4>
                    <div class="col-12 col-lg-8 text-center text-lg-start">
                        <p class="para-txt">Engineering technology applies practical
                            engineering principles for hands-on solutions,
                            emphasizing real-world applications across various industries.</p>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="d-grid justify-content-center">
                <div class="col-12 mt-5">
                    <h2 class="name-txt">VIRAJ WICKRAMASINGHE</h2>
                    <img src="resources/profile-img.png" class="profile-img justify-content-center">
                </div>
            </div>
            <!--  -->
        </div>
    </div>
    <!-- ------------------------------------------ -->
    <div class="container-fluid bg-color d-md-flex d-lg-flex mt-5 mb-5">
        <div class="col-8 offset-1 mt-size">
            <h1 class="first-name">VIRAJ</h1>
            <h3 class="second-name">WICKRAMASINGHE</h3>
            <h4 class="qualifications-txt">BSC (Hons) in Civil & Structural Eng</h4>
            <h4 class="sm-txt">Popular Engineering Technology Lecturer</h4>
            <div class="d-inline-flex mt-3">
                <a href="https://www.facebook.com/profile.php?id=61554004900879" target="blank"><i
                        class="fa-brands fa-facebook icon-im"></i></a>
                <a href="https://wa.link/vnetww" target="blank"><i class="fa-brands fa-whatsapp icon-wh"></i></a>
            </div>
        </div>
        <!--  -->
        <div class="d-grid justify-content-center">
            <div class="col-4">
                <img src="resources/man-img.png" class="man-img mt-5" />
            </div>
        </div>
    </div>
    <!-- ------------------------------------------ -->
    <?php include "footer.php" ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>