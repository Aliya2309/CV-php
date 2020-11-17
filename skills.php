<?php include_once('config.php');   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link rel="stylesheet" href="css\common-styling.css">
    <link rel="stylesheet" href="css\skill-card.css">
</head>
<body>
    <?php include_once('nav.php');  ?>
    <div class="main">

    <?php foreach($skills as $sk){  ?>
        <div class='skill-card' style="<?php echo $sk['style']; ?>">
            <div id=<?php echo $sk['id']; ?>></div>
            <div class='text'><?php echo $sk['name']; ?></div>
        </div>

    <?php } ?>
        
    </div>
</body>
</html>