<?php
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Bezpośredni dostęp zabroniony');
}
?>
<section id="portfolio" class="portfolio section-slant slant-up">
    <div class="container">
        <div class="section-title centered">
            <div class="subtitle">Realizacje</div>
            <h2>MOJE PORTFOLIO</h2>
        </div>
        <div class="portfolio-filter">
            <button class="filter-btn active" data-filter="all">Wszystkie</button>
            <button class="filter-btn" data-filter="brwi">Brwi</button>
            <button class="filter-btn" data-filter="rzesy">Rzęsy</button>
            <button class="filter-btn" data-filter="zabiegi">Zabiegi</button>
        </div>
        <div class="portfolio-grid">
            <!-- Zdjęcia będą dodane przez JavaScript -->
        </div>
        <div class="portfolio-pagination">
            <!-- Przyciski paginacji będą dodane przez JavaScript -->
        </div>
    </div>
</section>
