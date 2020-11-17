<?php include_once('config.php');   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="css\common-styling.css">
    
    <link rel="stylesheet" href="css\project-card.css">
</head>
<body>
<?php include_once('nav.php');  ?>
    <div class="main">
    <?php foreach($projects as $prj){  ?>
        <div class="project-card" style="top:<?php echo $prj['top'];?>;">
            <div class="text">
                <a href=<?php echo $prj['link'];?>><?php echo $prj['pname'];?></a><br>
                <?php echo $prj['detail'];?>
             </div>
             <div id=<?php echo $prj['img'];?>></div>
        </div>
    <?php }?>
        
    </div>
</body>
</html>