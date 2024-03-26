<?php include("headder.php"); ?>

<?php 
        $id= $_GET['id'];
        $select_data= "SELECT * FROM `my_notes` WHERE `id`= $id";
        $result= mysqli_query($conn, $select_data);

        $row= mysqli_fetch_assoc($result);
        // var_dump($row);
        $title= $row['title'];
        $desc= $row['description'];

    ?>

        <form action="update_back.php/" method="POST" class="container mt-5">
               <h2>Update Note</h2>
               <div class="mb-3">
               <input type="text" class="form-control" id="exampleFormControlInput1" name="id" value= <?php echo $id ?> hidden>
                   <label for="exampleFormControlInput1" class="form-label">Title</label>
                   <input type="text" class="form-control" id="exampleFormControlInput1" name="title" value= <?php echo $title ?> >
               </div>
               <div class="mb-3">
                   <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                   <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"><?php echo $desc ?></textarea>
               </div>

               <div class="col-12">
                   <button class= "btn btn-primary">Update Note</button>
               </div>
           </form>

<?php include("footer.php"); ?>