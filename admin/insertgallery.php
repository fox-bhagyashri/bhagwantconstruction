<?php
session_start();
if (empty($_SESSION['admin_session'])) {

}
include_once '../conn.php';


if (isset($_FILES["images"])) {
   
    $sitename = $_POST["sitename"];
       
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["images"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
       
    } else {
        if (move_uploaded_file($_FILES["images"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["images"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } 

        // Move the uploaded file to the desired directory
        
            $query = "INSERT INTO `projects`(`image`, `site_name`) VALUES ('$target_file','$sitename')";
            $query_run = mysqli_query($conn, $query);

            if (!$query_run) {
                echo "try again";
            } else {
                //echo "Registered Successfully";

                echo "<SCRIPT type='text/javascript'> //not showing me this
                      alert(' Image Added successfully!!');
                     window.location.replace('gallery.php');
                    </SCRIPT>";
            }
        
    }

    
    ?>