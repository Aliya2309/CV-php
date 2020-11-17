<?php include_once('config.php');   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="css\common-styling.css">
    <link rel="stylesheet" href="css\main.css">
</head>
<body>
<?php include_once('nav.php');  ?>
    <div class="main">
        <div class='name'><?php echo $full_name;   ?></div>
        <div class='text'><?php echo $intro[1];   ?><br> 
        <?php echo $intro[2];   ?>
            <br><br><br>
            CONTACT ME:<br>
        
            Phone No: <?php echo $phone;   ?> <br>
            E-Mail: <?php echo $email;   ?> <br>
        </div>
    </div>
    
</body>
</html>