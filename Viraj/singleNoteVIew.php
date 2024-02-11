<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Note View - Viraj Wickramasinghe</title>
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
        <div class="col-8 mt-4">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="resources/note1.png" class="d-block w-100 img-size" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <h1 class="title-note mt-4">Engineering technology introductionlesson - Part 1</h1>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-11">
            <p class="para-txt">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit autem optio ipsam est amet
                eos, aspernatur
                magnam placeat explicabo, omnis architecto quam aperiam eveniet voluptas, alias odio eum. Adipisci illo
                beatae necessitatibus possimus explicabo recusandae nisi, labore qui natus dolor voluptatem eveniet
                quisquam laudantium fugiat asperiores rem aliquid voluptates suscipit. Veniam officiis soluta saepe
                suscipit eius fugit nesciunt magni. Distinctio officiis molestiae quis minus doloribus! Perspiciatis
                nemo ducimus in maxime, reiciendis id neque commodi perferendis tenetur corrupti porro ad, nostrum
                ipsam, velit eaque nam. Sapiente pariatur quo laborum iste veniam rem aut adipisci quod ut consequuntur
                nisi facilis totam iusto expedita quisquam, voluptatibus voluptate possimus esse? Veniam consequatur
                vero eveniet ipsa excepturi distinctio optio repellendus quia molestiae id dicta magni odio eligendi,
                quidem sapiente, porro velit earum rem! Ex inventore accusamus soluta labore, voluptas ipsa harum totam
                maxime iure eveniet libero nisi magnam culpa aliquam debitis, tempora veritatis aut! Ullam quo hic earum
                dolores nobis ipsum iste quasi saepe facilis, error non aliquid deserunt distinctio sunt veniam id,
                minima cumque ex vel consequuntur cupiditate maiores. Consectetur quibusdam iste est enim, eveniet quod
                sed nesciunt. Perferendis delectus exercitationem dolores assumenda id, eligendi, aliquam ut nam eveniet
                quia in iste et voluptates?</p>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>