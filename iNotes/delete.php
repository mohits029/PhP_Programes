<?php include("headder.php"); ?>

<?php 
$id= $_GET['id'];
$delete_query= "DELETE FROM `my_notes` WHERE `my_notes`.`id` = $id";
$result= mysqli_query($conn,$delete_query);

if($result){
    echo "deleted successfully";
    header("location:index.php");
}else{
    echo "Not delete successfully";
}
 ?>

<?php include("footer.php");?>