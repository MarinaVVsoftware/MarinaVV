<?php

$_POST = json_decode(file_get_contents("php://input"),true);


if(!empty($_POST['name']) && !empty($_POST['phone'])){
    $emailto = "fbuenfil@marinavv.com";
    $name = $_POST['name'];
    $boat = $_POST['boat'];
    $email = $_POST['email'];
    $slora = $_POST['slora'];
    $phone = $_POST['phone'];
    $requirements = $_POST['requirements'];
    $mailHeader = "Contact from www.marinavv.com by: $name \r\n";
    $message = " Contact from website \n
    First Name:  $name  \n
    Email: $email \n
    Telephone: $phone \n
    Boat Name: $boat \n
    Slora: $slora \n
    Requirements: $requirements \n";
    mail($emailto,$mailHeader,$message,$mailHeader) or die(0);
    echo(1);   
}else{
    echo(0);
}
?>
 