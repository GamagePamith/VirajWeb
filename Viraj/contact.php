<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Viraj Wickramasinghe</title>
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

<body>
    <?php include "header.php"; ?>
    <div class="container-fluid">
        <div class="d-lg-flex d-grid">

            <div class="d-grid justify-content-lg-start justify-content-center offset-lg-1 offset-0">
                <div class="col-12">
                    <div class="d-grid">
                        <div class="card-my mt-5">
                            <div class="d-flex">
                                <div class="box-green"></div>
                                <div class="marg p-3">
                                    <h3 class="general-txt">General</h3>
                                    <h3 class="content-txt">+94 71 140 6494</h3>
                                    <h3 class="content-txt-sec">virajwickramasinghe@gmail.com</h3>
                                </div>
                            </div>
                        </div>

                        <div class="card-my mt-5 mb-4">
                            <div class="d-flex">
                                <div class="box-green-sec">
                                    <img src="resources/graduate.png" class="grad-hat" />
                                </div>
                                <div class="marg p-3">
                                    <h3 class="general-txt-sec">Knowledgewin - Bandarawela</h3>
                                    <h3 class="content-txt">+94 71 140 6494</h3>
                                    <h3 class="content-txt-sec">Bandarawela By Pass Rd,
                                        Sri Lanka</h3>
                                    <h3 class="content-txt-sec">virajwickramasinghe@gmail.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="d-grid justify-content-lg-end justify-content-center mt-5 mb-2 offset-lg-3 offset-0">
                <div class="col-12">
                    <div class="msg-box p-5">
                        <h3 class="msg-topic">Get in touch with us</h3>
                        <div class="input-set mt-5 mb-4">
                        <h4 class="content-txt">Enter Your Email Address</h4>
                            <input class="input-msg">
                        </div>
                        <div class="input-set mb-4">
                            <h4 class="content-txt">Enter Your Mobile Number</h4>
                            <input class="input-msg">
                        </div>
                        <div class="input-set mb-4">
                            <h4 class="content-txt">Enter Your Message</h4>
                            <input class="input-msg">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="feeedback-btn">Send Feedback</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>