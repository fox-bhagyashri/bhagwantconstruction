<?php
session_start();
if (empty($_SESSION['admin_session'])) {
    header('Location:login.php');
}
include_once '../conn.php';
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

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <?php include 'top.php'; ?>
        <?php include 'sidebar.php'; ?>
        <div class="content container-fluid">

            <div class="page-header mt-2">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Blogs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Blogs</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-12 text-right">
                    <a href="addoffer.php" class="btn btn bg-danger-light"><i class="fas fa-plus"></i>Add Offer</a>
                </div>
            </div>

            <div class="row">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">


                                <table class="table table-hover table-center mb-0 datatable">
                                    <thead>
                                        <tr>
                                            <!-- course_curriculum id  cours_id    curriculum  -->

                                            <th>No</th>
                                            <th>Blog Name</th>
                                            <th>Image</th>
                                            <th class="text-right">Action</th>
                                            <!--   <td>Photos</td> -->
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM offer ORDER BY offer.id DESC";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                $srno = 1;
                                                while ($row = $result->fetch_assoc()) {

                                            ?>
                                        <tr style="text-align: justify;">
                                            <td scope="row"><?= $srno ?> </td>

                                            <td><?php echo $row['name']; ?></td>
                                            <td>
                                                <img src="<?php echo $row["image"] ?>" class="img-fluid rounded-start"
                                                    style="height: 200px; " alt="...">
                                            </td>
                                            <td class="text-right">
                                                <div class="actions">
                                                    <!-- <a href="editoffer.php?id=<?php echo  $row["id"] ?>"
                                                        class="btn btn-sm bg-success-light ">
                                                        <i class="fas fa-pen"></i>
                                                    </a><br><br> -->
                                                    <a href="deleteoffer.php?id=<?php echo  $row["id"] ?>"
                                                        class="btn btn-sm bg-danger-light"
                                                        onClick="javascript: return confirm('Please confirm deletion');">
                                                        <i class="fas fa-trash"></i>
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                                    $srno++;
                                                }
                                            } else {
                                                echo "No Data In Database";
                                            }
                                            ?>
                                    </tbody>
                                </table>
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


    <!-- Scripts  -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/script.js"></script>

</body>

</html>