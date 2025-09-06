<?php
    require '../conn.php';
    $id = $_GET['id'];
    // sql to delete a record
    $sql = "DELETE FROM offer WHERE id =$id";

    if ($conn->query($sql) === TRUE) {
       echo "<SCRIPT type='text/javascript'> //not showing me this
                       alert('Deleted Successfully!! ');
                      window.location.replace('offers.php');
                     </SCRIPT>";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
?>