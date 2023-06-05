<?php
  $Product = $_POST['Product'];
  $Name = $_POST['Name'];
  $email = $_POST['email'];
  $Mob_num = $_POST['Mob_num'];
  $dob = $_POST['dob'];
  $aadhar = $_POST['aadhar'];
  $PAN = $_POST['PAN'];
  $nation = $_POST['nation'];
  $gender = $_POST['gender'];
  $occup = $_POST['occup'];
  $company = $_POST['company'];
  $salary = $_POST['salary'];

  //Database Connection
  $conn = new mysqli('localhost','root','','appform');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into personalform (Product,Name,email,Mob_num,dob,aadhar,PAN,nation,gender,occup,company,salary)
    values(?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt -> bind_param("sssisiissssi", $Product, $Name, $email, $Mob_num, $dob, $aadhar, $PAN, $nation, $gender, $occup, $company, $salary);
    $stmt -> execute();
    echo
    "<script> alert('Application Registered...'); </script>";
    $stmt -> close();
    $conn -> close();
  }
?>