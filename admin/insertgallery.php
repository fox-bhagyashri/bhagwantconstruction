<?php
session_start();
if (empty($_SESSION['admin_session'])) {

}
include_once '../conn.php';


if (isset($_FILES["images"])) {
    $uploadsDir = "uploads/"; // Change this to your desired upload directory

    // Loop through each uploaded file
    for ($i = 0; $i < count($_FILES["images"]["name"]); $i++) {
        $tmpFilePath = $_FILES["images"]["tmp_name"][$i];
        $newFilePath = $uploadsDir . $_FILES["images"]["name"][$i];

        // Move the uploaded file to the desired directory
        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            $query = "INSERT INTO `projects`(`image`) VALUES ('$newFilePath')";
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
        } else {
            echo "Error uploading file $newFilePath.<br>";
        }
    }
}
    
    ?>