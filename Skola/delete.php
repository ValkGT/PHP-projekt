
<?php
include "databaza.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql="delete from `hraci` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
         header('location:tabulka.php');

    }else{
        die(mysqli_error($con));
    }
}
?>