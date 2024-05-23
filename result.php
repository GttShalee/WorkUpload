<?php
$servername = "localhost";
$username = "root";
$password = "SLkdy06286208@";
$dbname = "workUpload";

// 创建与MySQL数据库的连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 从POST请求中获取表单数据
$name = $_POST['name'];
$email = $_POST['email'];

// 插入数据到MySQL数据库中
$sql = "use qq;";
$sql .= "insert into qqid values('$name')";

$sql1 = "use student;";
$sql1 .= "select * from login_info where username = '$name'";
if ($conn->multi_query($sql1) === TRUE){
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

//if ($conn->multi_query($sql) ===     TRUE) {
//    echo "Data inserted successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

// 关闭连接
$conn->close();
?>
