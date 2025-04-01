<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $app = $_POST['app'];
    $loan_amount = $_POST['loanAmount'];

    $checkEmail="SELECT * FROM users WHERE email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        echo "Энэ имэйл бүртгэлтэй байна.";  
    }
    else{
        $insertQuery="INSERT INTO users(firstname,email,password,app,loan_amount)
                        VALUES ('$firstName', '$email','$password','$app', '$loan_amount')";
            if($conn->query($insertQuery)==TRUE){
                header("Location: finish.html");
                exit;
            }
            else{
                echo"ERROR:" .$conn->error;
            }
    }
}

?>
