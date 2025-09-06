<?php
session_start();
if (empty($_SESSION['admin_session'])) {

}
include_once '../conn.php';



$id = $_POST['idd'];

$description= $_POST["description"];
$blogname= $_POST["blogname"];



    $sql = "UPDATE `blog` SET `blog_name`='$blogname',`description`='$description' WHERE `id` = '$id'";
      //echo "<br>-=-=-=-=-=-<br>".$sql;
        if ($conn->query($sql)) {
            echo "<SCRIPT type='text/javascript'> //not showing me this
                  alert('Edited successfully!!');
                 window.location.replace('blog.php');
                </SCRIPT>";
              }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            } 
        
    ?>