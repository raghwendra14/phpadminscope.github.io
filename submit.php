<?php 

$html = '';

if($_POST['email'] != ''){
    $email = $_POST['email'];
}
else{
    $html.= 'Email is Required';
}

if($_POST['password'] != ''){
    $password = $_POST['password'];
}
else{
    $html.= 'password is Required';
}

if(isset($email) && isset($password)){
    echo '<p>'.$email.' is my email and ' .$password.' is my email <p>';
}
else{
    echo $html;
}
   
