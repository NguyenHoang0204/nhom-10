<?php
    session_start();
    if( !isset($_SESSION['email']) ){
        header('location:login.php');
    }
?>
<h1> Đây là trang admin </h1>
<a href="logout.php">
    <button type="submit" name="dangxuat"> Đăng xuất </button>
</a>