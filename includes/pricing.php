<?php
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Bezpośredni dostęp zabroniony');
}
?>
<!-- Pricing Section -->
<section id="pricing" class="pricing section-slant slant-up">
    <div class="container">
        <div class="section-title centered">
            <div class="subtitle">Usługi</div>
            <h2>CENNIK</h2>
        </div>
        
        <div class="pricing-tabs">
            <button class="pricing-tab active" data-category="stylizacja-brwi">Stylizacja brwi</button>
            <button class="pricing-tab" data-category="stylizacja-rzes">Stylizacja rzęs</button>
            <button class="pricing-tab" data-category="stymulatory">Stymulatory tkankowe</button>
            <button class="pricing-tab" data-category="mezoterapia">Mezoterapia</button>
            <button class="pricing-tab" data-category="depilacja">Depilacja woskiem</button>
            <button class="pricing-tab" data-category="piercing">Piercing</button>
            <button class="pricing-tab" data-category="szkolenia">Szkolenia</button>
        </div>
        
        <div class="pricing-content">
            <?php include_once __DIR__ . '/pricing/stylizacja-brwi.php'; ?>
            <?php include_once __DIR__ . '/pricing/stylizacja-rzes.php'; ?>
            <?php include_once __DIR__ . '/pricing/stymulatory.php'; ?>
            <?php include_once __DIR__ . '/pricing/mezoterapia.php'; ?>
            <?php include_once __DIR__ . '/pricing/depilacja.php'; ?>
            <?php include_once __DIR__ . '/pricing/piercing.php'; ?>
            <?php include_once __DIR__ . '/pricing/szkolenia.php'; ?>
        </div>
        
        <div class="pricing-note">
            <p>* Wszystkie ceny są orientacyjne i mogą ulec zmianie. Dokładna wycena po konsultacji.</p>
            <a href="https://booksy.com/pl-pl/dl/show-business/228690" target="_blank" class="btn booking-btn">Umów wizytę</a>
        </div>
    </div>
</section>
