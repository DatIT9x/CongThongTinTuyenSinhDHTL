<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/reset.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/owlcarousel/owl.theme.default.min.css">
    <title>Document</title>
</head>
<body>
        <?php 
           include("header.php");
           include("slider.php");
           include("nav-bot.php");
           include("main.php");     
           include("footer.php");
        ?>
    
    </div>
    <script src="<?php echo base_url();?>asset/vendor/jquery.min.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/font/a076d05399.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/owlcarousel/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>asset/js/script.js"></script>
</body>
</html>