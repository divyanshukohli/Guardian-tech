<?php
    $fullName=$_POST['fullName'];
    $username=$_POST['username'];
    $mob. number=$_POST['mob. number'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];

    //database connection
    $conn=new mysqli('localhost','root','','tech');
    if($conn->connect_error){
        die(Connection Failed : '.$conn->connect_error');
    }else{
        $stmt=$conn->prepare("insert into registration(fullName,username,mob. number,email,password,confirmPassword) values(?,?,?,?,?,?)");
        $stmt->bind_param("ssisss",$fullName,$username,$mob. number,$email,$password,$confirmPassword);
        $stmt->execute();
        echo "registration SUccessfully...";
        $stmt->close();
        $conn->close();'
        '
    }