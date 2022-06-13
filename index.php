<?php

require_once __DIR__ . '/script/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>dischi ajax</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="col-sx">
            <img src="./assets/logo-small.svg" alt="">
        </div>
        <div class="col-dx"></div>
    </header>
    <!-- MAIN -->
    <main>
        <!-- SELECT -->
        <select class="form-select" title="Scegli un'opzione">
            <option value="Jazz">Jazz</option>
            <option value="Rock">Rock</option>
            <option value="Pop">Pop</option>
            <option value="Metal">Metal</option>
        </select>
        <!-- CONTAINER DISCS -->
        <div class="container">
            <div class="row">
                <!-- DISC -->
                <?php foreach ($db as $album) :?>
                <div class="col-2 cg-card">
                    <div class="cover">
                        <img src="<?php echo $album['poster'] ?>" alt="<?php echo $album['title'] ?>">
                    </div>
                    <h5><?php echo $album['title'] ?></h5>
                    <p><?php echo $album['genre'] ?></p>
                    <p><?php echo $album['year'] ?></p>
                </div>
                <?php endforeach?>
            </div>
        </div>
    </main>
</body>
</html>