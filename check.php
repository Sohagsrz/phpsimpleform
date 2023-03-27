<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Datas</title>
</head>
<body>
<?php
//check 
if(isset($_POST['name']) && !empty($_POST['name'])){
    
    $name= isset($_POST['name']) ? $_POST['name'] : '';
    $email= isset($_POST['email']) ? $_POST['email'] : '';
    $password= isset($_POST['password']) ? $_POST['password'] : '';
    $password2= isset($_POST['passwordc']) ? $_POST['passwordc'] : '';
    $division= isset($_POST['division']) ? $_POST['division'] : '';
    $gender= isset($_POST['gender']) ? $_POST['gender'] : '';
    $subjects= isset($_POST['subjects']) ? $_POST['subjects'] : [];
    if($password !== $password2){
        echo 'Check your password combinations! <a href="/">Back to form</a>';
    return;
    }

?>
<div>
    <p>Name: <b><?php echo $name;?></b></p>
    <p>Email: <b><?php echo $email;?></b></p>
    <p>Division: <b><?php echo $division;?></b></p>
    <p>Gender: <b><?php echo $gender;?></b></p>
    <p>Subjects: <b><?php echo implode(', ', $subjects);?></b></p>
</div>
<?php

}else{

    echo 'Put your data first! <a href="/">Back to form</a>';
}

?>
</body>
</html>