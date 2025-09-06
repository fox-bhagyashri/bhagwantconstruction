<?php
session_start();
if (empty($_SESSION['admin_session'])) {
    header('Location:login.php');
}
include '../conn.php';
$id = $_GET['id'];




if (isset($_POST['uploads'])) {
    $idd=$_POST['idd'];

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $filename;
    if (move_uploaded_file($tempname, $folder)) {
    } else {
        $filename = $_POST["oldimage"];
    }


   

    $sql = "UPDATE `services` SET `image`=CONCAT('uploads/', '$filename') WHERE `id`='$idd'";
         
         //echo "<br>-=-=-=-=-=-<br>".$sql;
           if ($conn->query($sql)) {
               echo "<SCRIPT type='text/javascript'> //not showing me this
                     alert('Update Successfully!!');
                    window.location.replace('servicedetail.php');
                   </SCRIPT>";
                 }
           else {
               echo "Error: " . $sql . "<br>" . $conn->error;
               } 
    

}


if (isset($_POST['update'])) {

    $idd=$_POST['idd'];

    $filenametwo = $_FILES["imagetwo"]["name"];
    $tempnamee = $_FILES["imagetwo"]["tmp_name"];
    $folder = "uploads/" . $filenametwo;
    if (move_uploaded_file($tempnamee, $folder)) {
    } else {
        $filenametwo = $_POST["oldimagetwo"];
    }

    $sql = "UPDATE `services` SET `image2`=CONCAT('uploads/', '$filenametwo') WHERE `id`='$idd'";
         
         //echo "<br>-=-=-=-=-=-<br>".$sql;
           if ($conn->query($sql)) {
               echo "<SCRIPT type='text/javascript'> //not showing me this
                     alert('Update Successfully!!');
                    window.location.replace('servicedetail.php');
                   </SCRIPT>";
                 }
           else {
               echo "Error: " . $sql . "<br>" . $conn->error;
               } 





}
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Admin - Dashboard</title>

        <link rel="shortcut icon" href="../img/logop.png">
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
                                                        <h3 class="page-title">Edit Service</h3>
                                                        <!-- <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">What We Offer</li>
                            </ul> -->
                                                </div>
                                        </div>
                                </div>
                                <?php
                $id = $_GET['id'];
                $sql1 = "SELECT * FROM services WHERE id= $id";
                $result = $conn->query($sql1);
                $row = $result->fetch_assoc()

                ?>
                                <div class="row">
                                        <div class="col-sm-12">
                                                <div class="card">
                                                        <div class="card-body">

                                                                <div class="row">
                                                                        <!-- <div class="col-12">
                                            <h5 class="form-title"><span>About What We Offer Information</span></h5>
                                        </div> -->

                                                                        <div class="col-12 col-sm-6">
                                                                                <form action="updateservice.php"
                                                                                        method="post"
                                                                                        enctype="multipart/form-data">
                                                                                        <div class="form-group">
                                                                                                <label>Service
                                                                                                        Name</label>
                                                                                                <input type="hidden"
                                                                                                        name="idd"
                                                                                                        value="<?php echo $id; ?>">
                                                                                                <input type="text"
                                                                                                        class="form-control"
                                                                                                        name="sname"
                                                                                                        value="<?php echo $row['service_name']; ?>"
                                                                                                        required>
                                                                                        </div>
                                                                        </div>

                                                                        <div class="col-12 col-sm-6">
                                                                                <div class="form-group">
                                                                                        <label>Description</label>

                                                                                        <textarea type="text"
                                                                                                class="form-control ckeditor"
                                                                                                name="description"><?php echo $row['description']; ?></textarea>
                                                                                </div>
                                                                        </div>

                                                                        <div class="col-12">
                                                                                <button type="submit"
                                                                                        class="btn btn-primary">Update</button>
                                                                        </div>
                                                                        </form>
                                                                        <div class="col-12 col-sm-6 mt-5">
                                                                                <form action="" method="post"
                                                                                        enctype="multipart/form-data">
                                                                                        <input type="hidden" name="idd"
                                                                                                value="<?php echo $id; ?>">
                                                                                        <div class="form-group">
                                                                                                <label>Image </label>
                                                                                                <img src="<?php echo $row['image']; ?>"
                                                                                                        width="100">
                                                                                                <input type="hidden"
                                                                                                        class="form-control"
                                                                                                        name="oldimage"
                                                                                                        value="<?php echo $row['image']; ?>">
                                                                                                <input type="file"
                                                                                                        class="form-control"
                                                                                                        name="image"
                                                                                                        value="">
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                                <button type="submit"
                                                                                                        name="uploads"
                                                                                                        class="btn btn-primary">Update
                                                                                                        Image</button>
                                                                                        </div>
                                                                                </form>
                                                                        </div>
                                                                        </form>

                                                                </div>

                                                        </div>
                                                </div>

                                        </div>
                                </div>
                        </div>
                </div>

        </div>
        </div>
        </div>




        <footer>
                <p>Copyright © 2024 Fox AirComm.</p>
        </footer>
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