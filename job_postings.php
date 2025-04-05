<?php
    // Database connection info
    $host = 'gsydm1.siteground.biz'; // or your host
    $db = 'dbozo7b6gldnvg';
    $user = 'uoyiyel0fc0xg';
    $pass = 'txw4f2lnhzgx';

    // Connect to DB
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitize inputs
    $job_title              = $conn->real_escape_string($_POST['job_title']);
    $required_skills        = $conn->real_escape_string($_POST['required_skills']);
    $job_description        = $conn->real_escape_string($_POST['job_description']);
    $salary_range           = $conn->real_escape_string($_POST['salary_range']);
    $location               = $conn->real_escape_string($_POST['location']);
    $estimated_start_date   = $conn->real_escape_string($_POST['estimated_start_date']);
    $estimated_end_date     = $conn->real_escape_string($_POST['estimated_end_date']);
    $estimated_weekly_hours = (int)$_POST['estimated_weekly_hours'];
    $application_deadline   = $conn->real_escape_string($_POST['application_deadline']);
    $engagement_type        = $conn->real_escape_string($_POST['engagement_type']);

    // Insert into DB
    $sql = "INSERT INTO job_postings (
                job_title, required_skills, job_description, salary_range, location,
                estimated_start_date, estimated_end_date, estimated_weekly_hours,
                application_deadline, engagement_type
            ) VALUES (
                '$job_title', '$required_skills', '$job_description', '$salary_range', '$location',
                '$estimated_start_date', '$estimated_end_date', $estimated_weekly_hours,
                '$application_deadline', '$engagement_type'
            )";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Job posted successfully!'); window.history.back();</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.history.back();</script>";
    }

    $conn->close();
?>
