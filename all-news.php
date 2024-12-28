<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Background</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
</head>

<body>
    <?php include_once './pages/news-page-header.php'; ?>
    <?php include_once './pages/social-icons.php' ?>

    <section id="all-news">
        <?php include_once './pages/all-news.php'; ?>
    </section>
    <?php include_once './pages/work-with-us.php'; ?>
    <?php include_once './pages/footer.php'; ?>
    <?php include_once './pages/contactform.php'; ?>


    <script src="./js/index.js"></script>
</body>

</html>