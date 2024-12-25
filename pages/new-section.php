<?php
// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "realEstate";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the latest 3 news records
$sql = "SELECT title, meta, description, image_url FROM news ORDER BY id DESC LIMIT 3";
$result = $conn->query($sql);
?>

<div class="f-press">
    <div class="f-press__container">
        <div class="f-press__title-wrap">
            <h2 class="f-press__title">In The News</h2>
        </div>
        <div class="f-press__description">As one of the top leaders in the NYC
            luxury real estate market, Philip Scheinfeld has persistently climbed
            to the upper echelon of luxury brokerage.</div>
        <div class="news-section">
            <div class="news-container">
                <?php
                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output data for each news record
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="news-item">';
                        echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="' . htmlspecialchars($row['title']) . '" class="news-image" />';
                        echo '<h3 class="news-title">' . htmlspecialchars($row['title']) . '</h3>';
                        echo '<p class="news-description">' . htmlspecialchars($row['description']) . '</p>';
                        echo '<p class="news-meta">' . htmlspecialchars($row['meta']) . '</p>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No news available.</p>';
                }
                ?>
            </div>

        </div>

        <div class="f-press__btn-wrap">
            <a href="/realEstate/all-news.php" class="f-press__btn button-style-2"
                data-uw-rm-brl="PR"
                data-uw-original-href="http://localhost/realEstate/all-news.php">
                View All
            </a>
        </div>
    </div>
</div>
<?php
// Close the database connection
$conn->close();
?>