<?php
session_start();
if (empty($_SESSION['admin_session'])) {

}
include_once '../conn.php';



$id = $_POST['idd'];
$course_name = $_POST["course_name"];
$description= $_POST["description"];
$singleline= $_POST["singleline"];





    $sql = "UPDATE `addcourses` SET `course_name`='$course_name',`single_line`='$singleline',`description`='$description' WHERE id = '$id'";
      //echo "<br>-=-=-=-=-=-<br>".$sql;
        if ($conn->query($sql)) {
            echo "<SCRIPT type='text/javascript'> //not showing me this
                  alert('Edited successfully!!');
                 window.location.replace('courses.php');
                </SCRIPT>";
              }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
        
    ?>