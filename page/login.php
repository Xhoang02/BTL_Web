<?php 
    
    if(isset($_POST['btnDangnhap']))
    {
    $user=$_POST['txtUser'];
    $password=md5($_POST['txtPass']);
    $sql = "SELECT * FROM tai where Username = '$user' and Password = '$password'";
    $data = mysqli_num_rows(mysqli_query($con, $sql));
    $_SESSION['user'] = $_POST['txtUser'];
    if($data==1){
        echo "<script>alert('Đăng nhập thành công');</script>";
        header ('Location: ?option=home');
    }
    else{
        echo "<script>alert('Đăng nhập không thành công');</script>";
    }  
    }
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main">
    <form action="" method="post">
    <table>
            <tr>
                <td>Đăng nhập</td>
                <td><input type="text" name="txtUser" placeholder="Tên đăng nhập"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="txtPass" placeholder="Mật khẩu"></td>
            </tr>
            <tr colspan="2" style="text-align:center;">
                <td><input type="submit" value="Đăng nhập" name="btnDangnhap"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>