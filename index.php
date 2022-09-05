<?php 
include "connect.php";
// $stmt = $con->prepare("INSERT INTO `users`(`username`, `email`) VALUES ('Hello','Hello@gmail.com')");
// $stmt->execute();
// $stmt = $con->prepare("INSERT INTO `users`(`username`, `email`) VALUES (?,?)");
// $stmt->execute(array("Email","Email@gmail.com"));
$stmt = $con->prepare("INSERT INTO `users`(`username`, `email`) VALUES (:us,:em)");
$stmt->execute(array(
    ":us"=>"Abdullah Tawfeq",
    ":em"=> "abdullahTawfeeq@gmail.com"
));
$count = $stmt->rowCount();

if ($count>0) {
    echo 'success';
}else{
    echo 'fail';
}

?>