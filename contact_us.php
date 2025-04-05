<?php
    $host = 'gsydm1.siteground.biz'; // or your host
    $db = 'dbozo7b6gldnvg';
    $user = 'uoyiyel0fc0xg';
    $pass = 'txw4f2lnhzgx';

    // Create database connection
    $conn = new mysqli($host, $user, $pass, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize input
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['textarea']); // textarea is the name of your message field

    // Insert query
    $sql = "INSERT INTO contact_form (name, email, phone, message)
            VALUES ('$name', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.history.back();</script>";
    }

    $conn->close();
?>
