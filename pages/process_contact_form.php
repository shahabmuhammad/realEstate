<?php
header('Content-Type: application/json');

// Database connection
$host = "fdb1029.awardspace.net";
$username = "4568765_realestate";
$password = "farooq@12";
$dbname = "4568765_realestate";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Database connection failed: ' . $conn->connect_error
    ]);
    exit;
}

// Process the form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Safely retrieve and escape form inputs
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $interest = $conn->real_escape_string($_POST['interest']);
    $message = $conn->real_escape_string($_POST['message']);
    $termsAccepted = isset($_POST['termsAccepted']) ? 1 : 0;

    // Prepare SQL query
    $sql = "INSERT INTO ContactSubmissions (name, email, phone, interest, message, terms_accepted)
            VALUES ('$name', '$email', '$phone', '$interest', '$message', $termsAccepted)";

    // Execute the query and return JSON response
    if ($conn->query($sql) === TRUE) {
        echo json_encode([
            'status' => 'success',
            'message' => 'Submission successful!'
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'Error submitting the form: ' . $conn->error
        ]);
    }

    // Close the database connection
    $conn->close();
} else {
    // Handle invalid request methods
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method. Please use POST.'
    ]);
}
