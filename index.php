<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Dischi</title>
</head>
<body>
    <header>
        <img src="https://e1.pngegg.com/pngimages/252/890/png-clipart-spotify-for-os-x-el-capitan-spotify-logo.png" alt="Spotify Logo">
    </header>
    <main>
        <?php
        require __DIR__ . '/database.php';
        ?>
        <div class="container">

            <?php foreach($database as $singleDisc){?>
                <div class="single_card">
                    <img src="<?php echo $singleDisc['poster']; ?>" alt="">
                    <h2><?php echo $singleDisc['title']; ?></h2>
                    <h3><?php echo $singleDisc['author']; ?></h3>
                    <h4><?php echo $singleDisc['year']; ?></h4>
                </div>
            <?php } ?>
            
        </div> 
    </main>
</body>
</html>