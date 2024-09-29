<?php
 session_start();
 if(isset($_POST['dangnhap']) )
 {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == 'admin' && $password == 'admin1')
    {
        $_SESSION['email'] = $email;
        header('location:admin.php');
    }
    else{
        echo "tài khoản hoặc mật khẩu sai";
    }
 }
?>
<form action="login.php" method="post">
    <label > Email </label>
    <input type="text" name="email">
    <label> Password </label>
    <input type="password" name="password">
    <button type="submit" name="dangnhap"> Đăng nhập </button>
</form>