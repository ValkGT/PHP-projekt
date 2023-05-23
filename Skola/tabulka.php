<?php
include "databaza.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <button class="btn btn.danger my-5"><a href="index.html">Home
       </a>
    <button class="btn btn.primary my-5"><a href="ziaci.php">
        
    Add user</a>
    
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Meno</th>
      <th scope="col">Priezvisko</th>
      <th scope="col">vek</th>
      <th scope="col">adresa</th>
      <th scope="col">Funkcia</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql="select * from `hraci`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row["ID"];
        $Meno=$row["Meno"];
        $Priezvisko=$row["Priezvisko"];
        $Vek=$row["Vek"];
        $Adresa=$row["Adresa"];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$Meno.'</td>
        <td>'.$Priezvisko.'</td>
        <td>'.$Vek.'</td>
        <td>'.$Adresa.'</td>
       
        <td>
        <button class="btn btn-secondary">
            <a href="update.php?updateid='.$id.'"class="text-light">
                Upraviť
            </a>
        </button>
    
        <button class="btn btn-danger">
            <a href="delete.php?deleteid='.$id.' "class="text-light">
                Zmazať
            </a>
        </button>
      </td>
        </tr>';
    }
}
?>
  
  </tbody>
</table>
    </div>
</body>
</html>
