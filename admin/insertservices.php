<?php
include_once '../dbconnection.php';

$cname = $_POST['coursename'];
$description = $_POST['description'];
$descriptionhome =$_POST['descriptionhome'];
// $shortdescription =$_POST['shortdescription'];

// $cityname =$_POST['cityname'];
// $area =$_POST['area'];
// $emailid =$_POST['emailid'];
// $password =$_POST['password'];
// $classid =$_POST['unicidpp'];
// $offer_prise = $_POST["offer_prise"];

// $startdate = $_POST['startdate'];






$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder = "image/".$filename;
if(move_uploaded_file($tempname,$folder)){
     $sql = "INSERT INTO `courses`(`coursename`,`description`,`description_home`,`image`) VALUES ('$cname','$description','$descriptionhome','$filename')";
//       //echo "<br>-=-=-=-=-=-<br>".$sql;
         }   if ($conn->query($sql)) {
          echo "<SCRIPT type='text/javascript'> //not showing me this
                                          alert('Courses Added successfully!!');
                                          window.location.replace('services.php');
                                          </SCRIPT>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    

?>    