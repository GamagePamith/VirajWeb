<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicles - Viraj Wickramasinghe</title>
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
    <div class="d-flex justify-content-center">
        <div class="col-5 mt-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control input-main" placeholder="Search">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>

    <?php
    $practicle_rs = Database::search("SELECT * FROM `practicle` ORDER BY `date_added` DESC ");
    $practicle_num = $practicle_rs->num_rows;

    for ($z = 0; $z < $practicle_num; $z++){
        $practicle_data = $practicle_rs->fetch_assoc();
        ?>
        <div class="d-grid justify-content-center mt-5">
        <div class="embed-responsive embed-responsive-16by9">
            <?php
            $videoURL = $practicle_data["link"];
            $convertedURL = str_replace("watch?v=", "embed/", $videoURL);
            ?>
            <iframe class="embed-responsive-item" src="<?php echo $convertedURL ?>" allowfullscreen></iframe>
        </div>
        <div class="d-grid">
            <h1 class="title-note-two mt-4"><?php echo $practicle_data["p_title"] ?></h1>
            <h1 class="date-text"><?php echo $practicle_data["date_added"] ?></h1>
        </div>
    </div>
        <?php
    }
    ?>


    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>