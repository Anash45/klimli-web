<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize and capitalize input data
    $first_name = strtoupper(trim($_POST['first_name']));
    $last_name = strtoupper(trim($_POST['last_name']));
    $contact_method = strtoupper(trim($_POST['contactMethod']));
    $email = strtoupper(trim($_POST['email']));
    $telephone = strtoupper(trim($_POST['telephone']));
    $communication_speed = strtoupper(trim($_POST['communication_speed']));
    $services = isset($_POST['services']) ? array_map('strtoupper', $_POST['services']) : [];

    if($_POST['email'] !== ''){
        $contactMethod = "<tr><th>Email</th><td>{$email}</td></tr>";
    }else{
        $contactMethod = "<tr><th>Telephone</th><td>{$telephone}</td></tr>";
    }
    // Construct the email content in tabular format
    $emailContent = "
    <table border='1'>
        <tr><th>First Name</th><td>{$first_name}</td></tr>
        <tr><th>Last Name</th><td>{$last_name}</td></tr>
        <tr><th>Contact Method</th><td>{$contact_method}</td></tr> 
        ".$contactMethod."       
        <tr><th>Communication Speed</th><td>{$communication_speed}</td></tr>
        <tr><th>Services</th><td>" . implode(', ', $services) . "</td></tr>
    </table>";

    // Set the recipient email address
    $to = "futuretest45@gmail.com";
    $subject = "Klimli - Contact Form";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: Klimli - {$first_name} {$last_name} <webmaster@klimli.com>" . "\r\n";

    // Send the email
    if (mail($to, $subject, $emailContent, $headers)) {
        $response = array('status' => 'success', 'message' => 'Your message has been sent successfully.');
    } else {
        $response = array('status' => 'error', 'message' => 'There was a problem sending your message.');
    }

    // Return the response as JSON
    echo json_encode($response);
}
?>