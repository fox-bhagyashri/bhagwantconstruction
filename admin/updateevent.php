<?php
session_start();
if (empty($_SESSION['admin_session'])) {

}
include_once '../conn.php';



$id = $_POST['idd'];
$date = $_POST["date"];
$address= $_POST["address"];
$eventname= $_POST["eventname"];





    $sql = "UPDATE `event` SET `event_title`='$eventname',`date`='$date',`address`='$address' WHERE id = '$id'";
      //echo "<br>-=-=-=-=-=-<br>".$sql;
        if ($conn->query($sql)) {
            echo "<SCRIPT type='text/javascript'> //not showing me this
                  alert('Edited successfully!!');
                 window.location.replace('event.php');
                </SCRIPT>";
              }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
        
    ?>