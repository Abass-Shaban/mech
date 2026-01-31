<?php
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root','');
if($conn->connect_error){
    die('wrong information.try again'.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(email,  password) values(?,?)");
    $stmt->bind_param("ss",$email,$password);
    $stmt->execute();
    echo"login successfully....";
    $stmt->close();
    $conn->close();

}

?>