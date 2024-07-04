<?php
session_start();
require('Core/EmailDAO.php');
$email = new EmailDAO();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $emailSender = trim(htmlspecialchars($_POST['email']));
    $subject = trim(htmlspecialchars($_POST['subject']));
    $message = trim(htmlspecialchars($_POST['message']));

    if (strlen($emailSender) <= 0 || strlen($subject) <= 0 || strlen($message) <= 0) {
        $_SESSION['errors'] = 'Please field all the fields.';
        header('Location:index.php#contact');
        exit();
    }

    $email->sendEmail($emailSender, $subject, $message);

    $_SESSION['alert'] = 'Email sent successfully';
    header('Location:index.php');
    exit();
}
