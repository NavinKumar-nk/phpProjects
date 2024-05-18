<?php
// Connecting the database:
include_once('db_connect.php');

// Validating the form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $edu_quali = $_POST['edu_quali'];
    $doc_name = $_POST['doc_name'];
    $doc_no = $_POST['doc_no'];

    // Preparing the SQL statement to insert the data into table:
    $sql = 'INSERT INTO applications (name, gender, dob, address, number, email, edu_quali, doc_name, doc_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssissss', $name, $gender, $dob, $address, $number, $email, $edu_quali, $doc_name, $doc_no);

    // Executing prepared SQL statemnt:
    if ($stmt->execute()) {
        echo "Registration Successfull!";
        echo " To verify the submitted information, please navigte back to home page and click on the View Submitted Data!";
    } else {
        echo "ERROR:" . $stmt->error;
    }
}
