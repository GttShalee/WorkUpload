<?php
header("Content-Type:text/html;charset=utf-8");
$conn = mysqli_connect('localhost','root','SLkdy06286208@','workUpload') or die('服务器连接失败');

$conn->query("SET NAMES 'UTF8'");

    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $sql = "USE student;";
    $sql ="select * from login_info where username = '$username' and password = '$pwd'";

    if ($result=$conn->query($sql)) {
        echo "登陆成功!";
    } else {
        echo "认证失败，请重新认证！";
    }
