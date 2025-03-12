<?php
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Bezpośredni dostęp zabroniony');
}
?>
<section id="reviews" class="reviews section-slant slant-down">
    <div class="container">
        <div class="section-title centered">
            <div class="subtitle">Opinie klientów</div>
            <h2>WASZE OPINIE</h2>
        </div>
        <div class="reviews-filter">
            <button class="filter-btn active" data-filter="all">Wszystkie</button>
            <button class="filter-btn" data-filter="stylizacja-brwi">Stylizacja brwi</button>
            <button class="filter-btn" data-filter="stylizacja-rzes">Stylizacja rzęs</button>
            <button class="filter-btn" data-filter="stymulatory">Stymulatory</button>
            <button class="filter-btn" data-filter="mezoterapia">Mezoterapia</button>
            <button class="filter-btn" data-filter="depilacja">Depilacja</button>
            <button class="filter-btn" data-filter="piercing">Piercing</button>
        </div>
        <div class="reviews-grid">
            <!-- Opinie będą dodane przez JavaScript -->
        </div>
        <div class="reviews-pagination">
            <!-- Przyciski paginacji będą dodane przez JavaScript -->
        </div>
    </div>
</section>
