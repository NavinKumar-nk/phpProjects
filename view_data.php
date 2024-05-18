<?php
// Including the database file:
include_once('db_connect.php');

// Validating the submitted data:r

// Retriving the data form database:
$sql = 'SELECT * FROM applications';
$result = $conn->query($sql);

// Dispalying the revrived data:
if ($result->num_rows > 0) {
    echo "<h2>REGISTERED APPLICANTS</h2>";
    echo "<table border ='1'>";
    echo "<tr><th>Registration Number</th><th>Name of Candiate</th><th>Date Of Birth</th><th>Address</th><th>Mobile Number</th><th>EmailID</th></tr>";
    while ($row = $result->fetch_assoc()) {
        // Generating random number for registration:
        $registration_number = mt_rand(100, 1000);

        echo "<tr><td>" . $registration_number . "</td><td>" . $row['name'] . "</td><td>" . $row['dob'] . "</td><td>" . $row['address'] . "</td><td>" . $row['number'] . "</td><td>" . $row['email'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No data found, be the first to register!";
}
