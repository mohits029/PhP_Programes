    <?php

    include("headder.php");

    if (!$conn) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Database not Conected Successfully</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>

    <form action="/iNotes/" method="POST" class="container mt-5">
        <h2>Add Note</h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Add title">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Save Note</button>
        </div>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $title = $_POST["title"];
        $description = $_POST["desc"];

        $add_query = "INSERT INTO `my_notes` (`title`, `description`) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $add_query);

        if ($result) {
            echo '<div class="alert alert-success alert-dismissible fade show container mt-5" role="alert">
            <strong>1 Note added Successful</strong>.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
    }
    ?>


    <table class="table container mt-2">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Note Title</th>
                <th scope="col">Note Descreption</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

    <?php
        $read_query= "SELECT * FROM `my_notes`";
        $data_result= mysqli_query($conn, $read_query);

        $row= mysqli_fetch_assoc($data_result);
        $count= 0;

        while($row!=null){
            $count= $count+1;
            echo '
                  <tr>
                    <th scope="row">'.$count .'</th>
                    <td>'.$row['title'] .'</td>
                    <td>'.$row['description'] .'</td>
                    <td>
                    <a class="btn btn-info" href="update_note.php?id='.$row['id'].'">Edit</a>  
                    <a class="btn btn-danger" href="delete.php?id='.$row['id'].'">Delete</a></td>
                  </tr>
                  ';
            $row= mysqli_fetch_assoc($data_result);
        }
    ?>
        </tbody>
    </table>

<?php
include("footer.php");

?>