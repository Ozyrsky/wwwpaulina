<?php
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Bezpośredni dostęp zabroniony');
}
?>
<!-- Footer -->
<footer id="footer" class="section-slant slant-down">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-widget contact-widget">
                <div class="footer-logo">
                    <img src="<?php echo $config['logo_path']; ?>" alt="<?php echo $config['site_name']; ?>" class="footer-logo-img">
                    <h3>Salon stylizacji rzęs i brwi</h3>
                </div>
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>Lokalizacja</h4>
                            <p><?php echo $config['contact']['address']; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <div>
                            <h4>Godziny otwarcia</h4>
                            <p><?php echo $config['contact']['hours']; ?></p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h4>Kontakt</h4>
                            <p><a href="tel:<?php echo str_replace(' ', '', $config['contact']['phone']); ?>"><?php echo $config['contact']['phone']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-widget">
                <h3>Nasze usługi</h3>
                <ul class="footer-links">
                    <li><a href="#stylizacja-brwi"><i class="fas fa-angle-right"></i> Stylizacja brwi</a></li>
                    <li><a href="#stylizacja-rzes"><i class="fas fa-angle-right"></i> Stylizacja rzęs</a></li>
                    <li><a href="#stymulatory"><i class="fas fa-angle-right"></i> Stymulatory tkankowe</a></li>
                    <li><a href="#mezoterapia"><i class="fas fa-angle-right"></i> Mezoterapia</a></li>
                    <li><a href="#depilacja"><i class="fas fa-angle-right"></i> Depilacja woskiem</a></li>
                    <li><a href="#piercing"><i class="fas fa-angle-right"></i> Piercing</a></li>
                    <li><a href="#szkolenia"><i class="fas fa-angle-right"></i> Szkolenia kosmetyczne</a></li>
                </ul>
            </div>
            
            <div class="footer-widget social-widget">
                <h3>Znajdź nas</h3>
                <p>Obserwuj nas w mediach społecznościowych, aby być na bieżąco z nowościami i promocjami.</p>
                <div class="social-links">
                    <a href="<?php echo $config['social']['facebook']; ?>" class="social-link facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="<?php echo $config['social']['instagram']; ?>" class="social-link instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="copyright">
                <p>&copy; <?php echo date('Y'); ?> Paulina Macherzyńska | Projekt: <a href="#">dkarczewski</a></p>
            </div>
            <div class="back-to-top">
                <a href="#hero" id="scroll-top-btn"><i class="fas fa-chevron-up"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Load JavaScript files -->
<script src="assets/js/main.js"></script>
<script src="assets/js/carousel.js"></script>
<script src="assets/js/portfolio.js"></script>
<script src="assets/js/reviews.js"></script>
<script src="assets/js/navigation.js"></script>

</body>
</html>
