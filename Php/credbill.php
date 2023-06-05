<?php
  $Card_Number = $_POST['Card_Number'];
  $Re_Card = $_POST['Re_Card'];
  $email = $_POST['email'];
  $Mob_num = $_POST['Mob_num'];
  $Amount = $_POST['Amount'];
  $Debit_card = $_POST['Debit_card'];
  $Exp_date = $_POST['Exp_date'];
  $CVV = $_POST['CVV'];

  //Database Connection
  $conn = new mysqli('localhost','root','','credbill');
  if($conn -> connect_error){
    die('Connection Failed :'.$conn ->connect_error);
  }
  else{
    $stmt = $conn -> prepare("insert into credit (Card_Number,Re_Card,email,Mob_num,Amount,Debit_card,Exp_date,CVV)
    values(?,?,?,?,?,?,?,?)");
    $stmt -> bind_param("iisiiiii", $Card_Number, $Re_Card, $email, $Mob_num, $Amount, $Debit_card, $Exp_date, $CVV);
    $stmt -> execute();
    echo
    "<script> alert('Your Money has Succesfully sent...'); </script>";
    $stmt -> close();
    $conn -> close();
  }
?>