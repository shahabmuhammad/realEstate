<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "shahab@12";
$database = "realEstate";

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pagination logic
$limit = 6;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch news from the database
$sql = "SELECT * FROM news ORDER BY id DESC LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);

// Fetch total number of news for pagination
$totalNewsSql = "SELECT COUNT(*) AS total FROM news";
$totalNewsResult = $conn->query($totalNewsSql);
$totalNews = $totalNewsResult->fetch_assoc()['total'];
$totalPages = ceil($totalNews / $limit);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Background</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>
    <?php include_once './pages/header.php'; ?>
    <?php include_once './pages/new-section.php'; ?>
    <?php include_once './pages/work-with-us.php'; ?>
    <?php include_once './pages/footer.php'; ?>

    <script src="./js/index.js"></script>
</body>

</html>
<?php
$conn->close();
?>