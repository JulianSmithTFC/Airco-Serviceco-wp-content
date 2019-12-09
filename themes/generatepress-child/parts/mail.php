<?php

$current_url = $_GET["url"];

if(isset( $_POST['fname'])){
    $fname = $_POST['fname'];
}

if(isset( $_POST['lname'])){
    $lname = $_POST['lname'];
}

if(isset( $_POST['email'])){
    $email = $_POST['email'];
}

if(isset( $_POST['phone'])){
    $phone = $_POST['phone'];
}

if(isset( $_POST['message'])){
    $bodyText = $_POST['message'];
}

$subject = 'Website Contact Form Submission';

$mailheader .= "From: postmaster@southerntechfusion.com \r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mailheader .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong></td><td > $fname $lname </td></tr>";
$message .= "<tr><td><strong>Email:</strong></td><td > $email </td></tr>";
$message .= "<tr><td><strong>Phone Number:</strong></td><td > $phone </td></tr>";
if(isset( $_POST['serviceOne']) || isset( $_POST['serviceTwo']) || isset( $_POST['serviceThree'])){

    $message .= "<tr><td><strong>Service interested in: Residential, Geothermal, Commercial?</strong></td><td>";
    $message .= "<ul>";

    if(isset( $_POST['serviceOne'])){
        $serviceOne = 'Residential';
        $message .= "<li>$serviceOne</li>";
    }
    if(isset( $_POST['serviceTwo'])){
        $serviceTwo = 'Geothermal';
        $message .= "<li>$serviceTwo</li>";
    }
    if(isset( $_POST['serviceThree'])){
        $serviceThree = 'Commercial';
        $message .= "<li>$serviceThree</li>";
    }

    $message .= "</ul>";
    $message .= "</td></tr>";
}

if(isset( $_POST['serviceNeededOne']) || isset( $_POST['serviceNeededTwo'])){

    $message .= "<tr><td><strong>Type of service needed: Heating or Cooling?</strong></td><td>";
    $message .= "<ul>";

    if(isset( $_POST['serviceNeededOne'])){
        $serviceNeededOne = 'Heating';
        $message .= "<li>$serviceNeededOne</li>";
    }
    if(isset( $_POST['serviceNeededTwo'])){
        $serviceNeededTwo = 'Cooling';
        $message .= "<li>$serviceNeededTwo</li>";
    }

    $message .= "</ul>";
    $message .= "</td></tr>";
}

$message .= "<tr><td><strong>What is causing you trouble?</strong></td><td > $bodyText </td></tr>";

$message .= "</table>";
$message .= "</body></html>";

$recipients = $_POST['strFormEmailRecipients'];

mail($recipients, $subject, $message, $mailheader) or die("Error!");

header('Location: ' . $current_url . '?submission=success');

?>