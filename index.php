<?php 
include './connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel World</title>
    <link rel="stylesheet" type="text/css" href="assets/css/head-box.css">
    <link rel="icon" href="img/icon/logo.png">
</head>
<body>
    <div id="main">
        <!-- Header -->
        <div id="header">
            <div id="box-logo">
                <div><a href=""><img src="img/icon/logo.png" alt="Logo"></a></div>
                <div><a href="">Travel World</a></div>
            </div>
            <div id="box-menu">
                <div><a href="">Home</a></div>
                <div><a href="">About us</a></div>
                <div><a href="">Contact us</a></div>
                <div><a href="">Help</a></div>
            </div>
            <div id="box-search">
                <div title="Tìm kiếm">
                    <input type="text" name="txtmakhach" id="searching" placeholder="Địa điểm bạn tìm kiếm">
                        <div id="box-small"></div>
                    </input>
                </div>
                <input type="submit" name="btnTimkiem" class="btnTimkiem">
            </div>
            <?php if(!isset($_SESSION['user'])){
                  ?>
                    <div id="form-log">
                    <div><a href="?option=login" title="Đăng nhập">Đăng nhập</a></div>
                    <div><a href="?option=dangky" id="form-login" title="Đăng ký">Đăng xuất</a></div>
                    </div>
              <?php
              }else{
                ?>
                <div>Xin chào:<?=$_SESSION['user']?><a href="?option=logout" >Đăng xuất</a></div>
                <?php
            }?>
              
                
             
                    
         
           

            
           
        </div>
    </div>
    <div>
                <?php
                if(isset($_GET['option'])){
                    switch ($_GET['option']){ 
                        case 'home':
                            include './page/home.php';
                            break;
                  
                        case 'login':
                            include './page/login.php';
                            break;
                            case 'logout':
                               unset($_SESSION['user']);
                               header('location:?option=home');
                                break;
                        default:
                            include './page/home.php';
                            break;
                    }
                }
                else{
                    header('location: ?option=home');
                }
                ?>
            </div>
</body>
</html>