<?php
header("Content-Type:text/html;charset=utf-8");
    $conn = mysqli_connect('localhost','root','','user') or die('服务器连接失败');

    $conn->query("SET NAMES 'UTF8'");

  

    $username = $_POST['username'];
    $password = $_POST['password'];

     $sql = "select * from user where username = '$username' and password = '$password'" or die('请您再次检查输入是否正确，系统没有在管理员名单中找到您');
  

    $result=$conn->query($sql) or die('请您再次检测查输入是否正确，系统没有在管理员名单中找到您');
if (!$result) {
    printf("发生错误: %s\n", mysqli_error($conn));
    exit();
}
    $rows=$result->fetch_assoc() or die('请您再次检测查输入是否正确，系统没有在管理员名单中找到您');

    

  

    if($rows){
        echo "登陆成功!";
    }

    else{
        echo"认证失败，请重新认证！";
    }  
    ?>   