<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes - Viraj Wickramasinghe</title>
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
                <input type="text" class="form-control input-main" placeholder="Search" id="noteSearch">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="searchbtn();"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
    <!-- --------------------------------------- -->
    <?php
    $note_rs = Database::search("SELECT * FROM `notes` ORDER BY `date_added` DESC ");
    $note_num = $note_rs->num_rows;

    for ($i = 0; $i < $note_num; $i++) {
        $note_data = $note_rs->fetch_assoc();
        ?>
        <div class="d-grid justify-content-center" id="basicSearchResult">
            <div class="card mb-3 " style="max-width: 840px;">
                <div class="row g-0">
                    <?php
                    $img_rs = Database::search("SELECT * FROM `note_img` WHERE `note_img_id`='" . $note_data["note_id"] . "' LIMIT 1 ");
                    $img_data = $img_rs->fetch_assoc();
                    ?>
                    <div class="col-md-6">
                        <a href="#"><img src="<?php echo $img_data["img_link"] ?>" class="img-fluid rounded-start"></a>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <a href="#">
                                <h5 class="card-title text-decoration-none text-black">
                                    <?php echo $note_data["note_title"]; ?>
                                </h5>
                            </a>
                            <p class="card-text ">
                                <?php echo $note_data["desc"]; ?>
                            </p>
                            <p class="card-text "><small class="text-body-secondary">
                                    <?php echo $note_data["date_added"]; ?>
                                </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    ?>


    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>