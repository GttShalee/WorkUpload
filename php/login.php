<?php
  $servername = "localhost";
  $username = "root";
  $password = "SLkdy06286208@";
  $dbname = "workUpload";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

//  $username = $_POST['email1'];
//  $pwd = $_POST['pwd11'];
  $username = "邵立";
  $pwd = "1234567";

  $sql = "use qq;";
  $sql .= "insert into user values('$username','$pwd')" or die('请您再次检查输入是否正确，系统没有在管理员名单中找到您');

  if ($conn->multi_query($sql) === TRUE) {
      echo "Data inserted successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

