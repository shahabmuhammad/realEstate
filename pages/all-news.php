<?php
// Database configuration
$host = "fdb1029.awardspace.net";
$username = "4568765_realestate";
$password = "farooq@12";
$database = "4568765_realestate";

// $host = "localhost";
// $username = "root";
// $password = "";
// $database = "realestate";

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
<div class="all-news-card-container">
    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="all-news-card">
                <div class="all-news-card-image" style="background-image: url('<?php echo $row['image_url']; ?>');"></div>
                <div class="all-news-card-content">
                    <h3><?php echo $row['title']; ?></h3>
                    <p class="all-news-meta"><?php echo $row['meta']; ?></p>
                    <p class="all-news-description"><?php echo $row['description']; ?></p>
                    <button class="all-news-read-more">READ MORE</button>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No news found.</p>
    <?php endif; ?>
</div>

<div class="pagination-container">
    <div class="all-news-pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>" class="all-news-pagination-prev">&lt;</a>
        <?php endif; ?>
        <ul class="all-news-pagination-list">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="all-news-pagination-item">
                    <a href="?page=<?php echo $i; ?>" class="all-news-pagination-link <?php echo $i == $page ? 'all-news-pagination-active' : ''; ?>">
                        <?php echo $i; ?>
                    </a>
                </li>
            <?php endfor; ?>
        </ul>
        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>" class="all-news-pagination-next">&gt;</a>
        <?php endif; ?>
    </div>
</div>