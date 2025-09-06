<?php
session_start();
if (empty($_SESSION['admin_session'])) {
    header('Location:login.php');
}
include '../conn.php';
$id = $_GET['id'];


if(isset($_POST['upload'])){

    $idd = $_POST['idd'];
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "uploads/" . $filename;

if (move_uploaded_file($tempname, $folder)) {
    // File upload successful, update $filename
} else {
    // File upload unsuccessful, keep the existing value of $filename
    $filename = $_POST["oldimg"];
}

$sql = "UPDATE `blog` SET `blog_image`=CONCAT('uploads/', '$filename') WHERE id = '$idd'";
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
}
?>
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
                            <h3 class="page-title">Edit Offer</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Offer</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
              
                $sql1 = "SELECT * FROM offer WHERE id= $id";
                $result = $conn->query($sql1);
                $row = $result->fetch_assoc()

                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="updateblog.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <!-- <div class="col-12">
                                            <h5 class="form-title"><span>About What We Offer Information</span></h5>
                                        </div> -->

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Blog Name</label>
                                                <input type="hidden" name="idd" value="<?php echo $id; ?>">
                                                <input type="text" class="form-control" name="blogname"
                                                    value="<?php echo $row['name']; ?>" required>
                                            </div>

                                        </div>


                                        <div class="col-12 mb-5">
                                            <button type="submit" name="" class="btn btn-primary">Submit</button>
                                        </div>
                                </form>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="col-12 col-sm-6">
                                        <input type="hidden" name="idd" value="<?php echo $id; ?>">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <img src="<?php echo $row['image']; ?>" width="150">
                                            <input type="hidden" name="oldimg" value="<?php echo $row['image']; ?>">
                                            <input type="file" name="image" value="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="upload" class="btn btn-primary">Update
                                            Image</button>
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




    <footer>
        <p>Copyright © 2024 Fox AirComm.</p>
    </footer>
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