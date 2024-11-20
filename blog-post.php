<?php
// Include header file
include_once 'header.php';
?>

<section class="blog-post">
    <div class="blog-post-content">
        <h2><?php echo $_GET['title']; ?>The</h2>
        <p><?php echo $_GET['description']; ?></p>
        <img src="<?php echo $_GET['image']; ?>" alt="<?php echo $_GET['title']; ?>">
        <p><?php echo $_GET['content']; ?></p>
        <a href="index.php" class="back-button">Back to Blog</a>
    </div>
</section>

<?php
// Include footer file
include_once 'footer.php';
?>