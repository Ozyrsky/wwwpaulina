<?php
define('SECURE_ACCESS', true);

require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="pl">
<?php include 'includes/header.php'; ?>
<body>
    <?php 
    // Ładowanie komponentów strony
    include 'includes/navigation.php';
    include 'includes/hero.php';
    include 'includes/about.php';
    include 'includes/testimonials.php';
    include 'includes/portfolio.php';
    include 'includes/pricing.php';
    include 'includes/reviews.php';
    include 'includes/footer.php';
    ?>

    <!-- Ładowanie skryptów JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/carousel.js"></script>
    <script src="assets/js/portfolio.js"></script>
    <script src="assets/js/reviews.js"></script>
    <script src="assets/js/navigation.js"></script>
</body>
</html>
