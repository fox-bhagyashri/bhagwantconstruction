<?php
session_start();

if (empty($_SESSION['admin_session'])) {
header('Location:login.php');
}
include_once '../conn.php';

if (isset($_POST['send'])) {

    $eventname = $_POST["eventname"];
    $date = $_POST["date"];
    $address = $_POST["address"];
   

     
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
       
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } 

    $sql = "INSERT INTO `event`(`event_title`, `date`, `address`, `image`)
     VALUES ('$eventname','$date','$address','$target_file')";
          
          //echo "<br>-=-=-=-=-=-<br>".$sql;
            if ($conn->query($sql)) {
                echo "<SCRIPT type='text/javascript'> //not showing me this
                      alert('Event Added successfully!!');
                     window.location.replace('event.php');
                    </SCRIPT>";
                  }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                } 
    
    }
    ?>




<!-- coursevideos coursevideos_id  cours_id  videos  -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin - Dashboard</title>

    <link rel="shortcut icon" href="../images/logoschool.jpg">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper">
        <?php include 'top.php'; ?>
        <?php include 'sidebar.php'; ?>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Add Event</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Add Event</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- <div class="col-12">
                                                <h5 class="form-title"><span>Job Post</span></h5>
                                            </div> -->

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Add Event Name</label>

                                                <input type="text" class="form-control" name="eventname" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="date" name="date" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Address </label>
                                                <textarea class="form-control" name="address" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Add Image</label>
                                                <input type="file" class="form-control" name="image" required>
                                                <!-- <p>Best View Size 300 X 200 PX</p> -->
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" name="send" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>

</body>

</html>