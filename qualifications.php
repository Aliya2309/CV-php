<?php include_once('config.php');   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualifications</title>
    <link rel="stylesheet" href="css\common-styling.css">
    <link rel="stylesheet" href="css\card.css">
</head>
<body>
    <?php include_once('nav.php');  ?>
    <div class="main">
    <?php foreach($qualifications as $q) {  ?>
        <div class= "card" style="left: <?php echo $q['left'];  ?>;">
        <?php echo $q['level'];  ?><br><br><?php echo $q['institution'];  ?><br><br><br><br><?php echo $q['grade'];  ?>
        </div>
    <?php } ?>


    </div>
</body>
</html>