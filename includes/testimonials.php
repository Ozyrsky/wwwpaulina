<?php
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Bezpośredni dostęp zabroniony');
}
?>
<section id="testimonials" class="testimonials section-slant slant-down">
    <div class="container">
        <div class="section-title centered">
            <div class="subtitle">Opinie</div>
            <h2>POLECAJĄ</h2>
        </div>
        <div class="carousel-container">
            <div class="carousel-wrapper">
                <div class="carousel">
                    <!-- Zdjęcia będą dodane przez JavaScript -->
                </div>
            </div>
            <div class="carousel-controls">
                <button class="carousel-btn prev-btn"><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-btn next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </div>
    <div id="lightbox" class="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-content" id="lightbox-img">
        <div class="lightbox-caption"></div>
        <button class="lightbox-nav prev-img"><i class="fas fa-chevron-left"></i></button>
        <button class="lightbox-nav next-img"><i class="fas fa-chevron-right"></i></button>
    </div>
</section>
