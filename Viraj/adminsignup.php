<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Viraj Wickramasinghe</title>
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
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="style.css">

</head>

<body class="bg-new">
        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
            <div class="col-8 ">
                <h3 class="admin-txt text-center">Admin Pannel</h3>
                <div class="mt-4 d-grid">
                    <input class="form-control" placeholder="Enter Admin Email" id="admin-mail" />
                    <input class="form-control mt-4" placeholder="Admin Password" type="password" id="admin-pw" />
                    <div class="car"></div>
                    <div class="d-flex justify-content-center mt-5">
                        <button class="feeedback-btn-two" onclick="adminSignUp();">Send Feedback</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>