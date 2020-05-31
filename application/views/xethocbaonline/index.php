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
    <link rel="stylesheet" href="<?php echo base_url();?>asset/vendor/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .title-heading{
        background-color: #3F51B5;
        display:flex;
        padding:8px;
    }
    .title-heading i{
        color: #fff;
        margin-right: 10px;
    }
</style>
<body>
    <div id="wrapper">
        <div id="header" style="box-shadow: 1px 4px 7px #ccc;">
            <div class="container">
                <div class="header__wrapp">
                    <div class="header__left">
                        <div id="logo">
                            <img src="<?php echo base_url();?>asset/image/logo/Logo-Thuy_Loi.png" alt="">
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="name-school">
                            <p>PHIẾU ĐĂNG KÝ XÉT TUYỂN ĐẠI HỌC CHÍNH QUY <br>
                                (Dành cho thí sinh xét tuyển bằng học bạ)
                            </p>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
        <div id="main">
            <div class="container">
                <h3 class="title-heading">
                    <i class="fas fa-exclamation-circle"></i>
                    <p>THÔNG TIN THÍ SINH</p>
                </h3>
                <div class="form-xettuyen">
                    

                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>asset/vendor/jquery.min.js"></script>
    <script src="<?php echo base_url();?>asset/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>asset/font/a076d05399.js"></script>
    <script src="<?php echo base_url();?>asset/js/script.js"></script>
</body>
</html>