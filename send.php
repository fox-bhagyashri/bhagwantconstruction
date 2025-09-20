<?php

$username = $_POST['username'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$services = $_POST['services'];
$messagee = $_POST['message'];


$to = "bhagwant.construction@gmail.com";
$subject = "Enquiry From Bhagwant Construction Website";

$message = "
<html>


<body>

<table>
<tr><td>First Name : </td> <td>" . $username . "</td></tr>
<tr><td>Last Name : </td> <td>" . $number . "</td></tr>
<tr><td>Email Id  : </td> <td>" . $email . "</td></tr>
<tr><td>Service : </td> <td>" . $services . "</td></tr>
<tr><td>Message : </td> <td>" . $messagee . "</td></tr>


</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



mail($to, $subject, $message, $headers);

echo "<script>alert(' THANK YOU FOR CONTACTING WE LOOK FORWARD TO WORKING WITH YOU SOON');location.replace('index.php')</script>";
?>