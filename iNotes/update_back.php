<?php include("headder.php"); ?>

<?php 
        if($_SERVER['REQUEST_METHOD']=='POST'){

            $id= $_POST['id'];
            $title= $_POST['title'];
            $desc= $_POST['desc'];
            $update_query= "UPDATE `my_notes` SET `title`= '$title',`description`='$desc' WHERE `id` = $id";
            $result= mysqli_query($conn, $update_query);

            if($result){
                echo "Updated Successfully";
                header("Location:http://localhost/iNotes/index.php");
            }else{
                echo "Not updated";
            }


        }

    ?>

<?php include("footer.php"); ?>