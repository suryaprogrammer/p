<?php 

$uname = $_POST['username'];
$pass = $_POST['password'];
// $uname = 'er';
// $pass = 'sdf';
//connection 
// echo $username;
// echo $password;


$servername = "localhost";
$username = "root";
$password = "";
// $database = "t7";


$conn = mysqli_connect($servername, $username, $password);


if($conn){
    echo "SERVER ONNECTED SUCCESSFYLLYYYYYYYYYYYY.......";
    $data = "CREATE DATABASE DDD;";
    mysqli_query($conn,$data);
$us = "USE DDD;";
mysqli_query($conn,$us);
  $newtable = "CREATE TABLE `DDD`.`tt7` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `username` VARCHAR(225) NOT NULL , `password` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";

  mysqli_query($conn,$newtable);

  $insert = "INSERT INTO `tt7` (`id`, `username`, `password`) VALUES (NULL, '$uname', '$pass');";
  mysqli_query($conn,$insert);
  
  $uss = "USE DDD;";


  mysqli_query($conn,$uss);

  $newtablee = "CREATE TABLE `DDD`.`tt77` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `username` VARCHAR(225) NOT NULL , `password` VARCHAR(225) NOT NULL , PRIMARY KEY (`id`));";

  mysqli_query($conn,$newtablee);

  $insertt = "INSERT INTO `tt77` (`id`, `username`, `password`) VALUES (NULL, '$pass', '$uname');";
  mysqli_query($conn,$insertt);
  if ($insert) {
      echo "done";
  }
  else {
      echo mysqli_connect_error();
  }

}
else {

    echo mysqli_connect_error();
}



?>

 <!-- 1c,2a,3d,4a,5a,6b,7a,8a,9a,10a. -->