<?php
// Include header file
include_once 'header.php';
?>

<section class="full-portfolio">
    <div class="full-portfolio-content">
        <h2>Full Portfolio</h2>
        <p>Explore our extensive portfolio of projects that showcase our expertise and commitment to quality.</p>
        <div class="full-portfolio-items">
            <?php
            // Fetch projects from database
            $projects = array(
                array('Inspiron 16 2-in-1 Laptop' => 'Inspiron 16 2-in-1 Laptop', ''description => 'Dell Technologies recommends Windows 11 Pro for business
                Warranty support options vary by operating system: Dell offers support plans for businesses with Windows Pro and support plans for personal use with Windows Home.', 'image' => 'images/notebook-inspiron-16-7640-midnight-blue-gallary-4.avif'),
                array('title' => 'Project Title 2', 'description' => 'Short description of Project 2.', 'image' => 'project2.jpg'),
                array('title' => 'Project Title 3', 'description' => 'Short description of Project 3.', 'image' => 'project3.jpg'),
                // Add more projects here
            );

            foreach ($projects as $project) {
                echo '<div class="full-portfolio-item">';
                echo '<img src="' . $project['image'] . '" alt="' . $project['title'] . '">';
                echo '<h3>' . $project['title'] . '</h3>';
                echo '<p>' . $project['description'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
        <a href="index.php" class="back-button">Back to Portfolio</a>
    </div>
</section>

<?php
// Include footer file
include_once 'footer.php';
?>