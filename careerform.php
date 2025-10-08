<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (!empty($_POST['name'])) {
    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $address = $_POST['address'] ?? '';
    $position = $_POST['position'] ?? '';
 

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'bhagwant.construction@gmail.com';
        $mail->Password = 'fbgm ccnk wufb msww';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('bhagwant.construction@gmail.com', 'Website Enquiry Form');
        $mail->addAddress('bhagwant.construction@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Enquiry from Website';
        $mail->Body = "
        <html>
        <body>
            <h2>Website Enquiry Details</h2>
            <table border='1' cellpadding='8' cellspacing='0'>
                <tr><td><strong>Full Name:</strong></td><td>{$name}</td></tr>
                <tr><td><strong>Phone Number:</strong></td><td>{$phone}</td></tr>
                <tr><td><strong>Email Id:</strong></td><td>{$email}</td></tr>
                <tr><td><strong>Address:</strong></td><td>{$address}</td></tr>
               <tr><td><strong>Position:</strong></td><td>{$position}</td></tr>
                
            </table>
        </body>
        </html>";

        $mail->AltBody = "Full Name: $name\nEmail ID: $email\nPhone Number: $phone\nAddress: $address\nPosition: $position";

        // Attach Resume (PDF)
        if (isset($_FILES['resume']) && $_FILES['resume']['error'] == 0) {
            $mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);
        }

        $mail->send();
        echo "<script>window.location.href = 'index.php';</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: " . $mail->ErrorInfo;
    }
} else {
    echo "<script>alert('Invalid request. Please fill out the form correctly.'); window.location.href = 'index.php';</script>";
}