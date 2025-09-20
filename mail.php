<?php

$username = $_POST['username'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$services = $_POST['services'];
$comment = $_POST['message'];


$to = "bhagwant.construction@gmail.com";
$subject = "Contact Us  Bhagwant Construction Website";

$message = "
<html>


<body>

<table>
<tr><td>First Name : </td> <td>" . $username . "</td></tr>
<tr><td>Full Name  : </td> <td>" . $lastname . "</td></tr>
<tr><td>Email id : </td> <td>" . $email . "</td></tr>
<tr><td>Service : </td> <td>" . $services . "</td></tr>

<tr><td>Comment : </td> <td>" . $comment . "</td></tr>

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