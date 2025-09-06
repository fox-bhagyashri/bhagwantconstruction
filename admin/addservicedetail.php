<?php
session_start();

if (empty($_SESSION['admin_session'])) {
header('Location:login.php');
}
include_once '../conn.php';


if (isset($_POST['send'])) {

    $servicename = $_POST["servicename"];

    $description = $_POST["description"];

   
       
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imageone"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    
    if ($uploadOk == 0) {
         "Sorry, your file was not uploaded.";
       
    } else {
        if (move_uploaded_file($_FILES["imageone"]["tmp_name"], $target_file)) {
             "The file " . htmlspecialchars(basename($_FILES["imageone"]["name"])) . " has been uploaded.";
        } else {
             "Sorry, there was an error uploading your file.";
        }
    } 



       

    // Prepare an insert statement
  
    $sql = $conn->prepare("INSERT INTO `services` (`service_name`, `image`, `description`) VALUES (?, ?, ?)");

    // Bind variables to the prepared statement as parameters
    $sql->bind_param("sss", $servicename, $target_file,$description);
    
    // Attempt to execute the prepared statement
    if ($sql->execute()) {
        echo "<SCRIPT type='text/javascript'> //not showing me this
              alert('Service Added successfully!!');
             window.location.replace('servicedetail.php');
            </SCRIPT>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close statement
    $sql->close();
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
            <div class="content container-fluid" style=" background: #021a7b2e;">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title text-center">Add Services</h3>
                            <!-- <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Add Courses</li>
                            </ul> -->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">


                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Add Services
                                                    Name</label>

                                                <input type="text" class="form-control" name="servicename" required>


                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Add Image</label>

                                                <input type="file" class="form-control " name="imageone">
                                            </div>
                                        </div>




                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Add Service
                                                    Description</label>

                                                <textarea type="text" class="form-control ckeditor"
                                                    name="description"></textarea>
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
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>

    <script src="assets/js/script.js"></script>

</body>

</html>