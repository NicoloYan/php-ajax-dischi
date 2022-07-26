<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php dischi</title>
</head>
<body>
    <header>
        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/1982px-Spotify_icon.svg.png" alt="logo spotify">
        </div>
    </header>
    <main>
        <div class="cards_wrapper">

            <?php foreach($albums as $album) { ?>

                <div class="card"> 
                    <div class="img-container">
                        <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?>">
                    </div>
                    <h3>
                        <?php echo $album['title'] ?>
                    </h3>
                    <div class="author">
                        <?php echo $album['author'] ?>
                    </div>
                    <div class="year">
                        <?php echo $album['year'] ?>
                    </div>
                </div>

            <?php } ?>  

        </div>
    </main>
</body>
</html>


