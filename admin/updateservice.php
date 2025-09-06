<?php
session_start();
if (empty($_SESSION['admin_session'])) {

}
include_once '../conn.php';



$id = $_POST['idd'];
$sname = $_POST["sname"];
$description= $_POST["description"];






    $sql = "UPDATE `services` SET `service_name`='$sname',`description`='$description'  WHERE `id`='$id'";
      //echo "<br>-=-=-=-=-=-<br>".$sql;
        if ($conn->query($sql)) {
            echo "<SCRIPT type='text/javascript'> //not showing me this
                  alert('Edited successfully!!');
                 window.location.replace('servicedetail.php');
                </SCRIPT>";
              }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
        
    ?>