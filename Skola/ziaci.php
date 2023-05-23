<?php
include "databaza.php";
if(isset($_POST["submit"])){
    $Meno=$_POST["Meno"];
    $Priezvisko=$_POST["Priezvisko"];
    $Vek=$_POST["Vek"];
    $Adresa=$_POST["Adresa"];

    $sql="insert into `hraci` (Meno,Priezvisko,Vek,Adresa)
     values('$Meno','$Priezvisko','$Vek','$Adresa')";
     $result=mysqli_query($con,$sql);
     if($result){
       
        header('location:tabulka.php');
     }else{
        die(mysqli_error($con));
    

     }
}
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
    <div class="container">
  <form method="post">
  <div class="form-group">
    <label >Meno</label>
    <input type="text" class="form-control" placeholder="Napíš svoje Meno" name="Meno">
</div>

<div class="form-group">
    <label >Priezvisko</label>
    <input type="text" class="form-control" placeholder="Napíš svoje Priezvisko" name="Priezvisko">
</div>

<div class="form-group">
    <label >Vek</label>
    <input type="text" class="form-control" placeholder="Napíš svoj vek" name="Vek">
</div>

<div class="form-group">
    <label >Adresa</label>
    <input type="text" class="form-control" placeholder="Napíš svoju adresu" name="Adresa">
</div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

    
  </body>
</html>