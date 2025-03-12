<?php
// Zabezpieczenie przed bezpośrednim dostępem
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Bezpośredni dostęp zabroniony');
}
?>
<!-- Header -->
<header>
    <div class="container">
        <div class="header-inner">
            <div class="logo">
                <a href="#hero">
                    <img src="<?php echo $config['logo_path']; ?>" alt="<?php echo $config['site_name']; ?>" class="logo-img">
                    <span class="logo-text">LASH & BROW EXPERT</span>
                </a>
            </div>
            
            <nav>
                <ul>
                    <li><a href="#hero">Strona główna</a></li>
                    <li><a href="#courses">O mnie</a></li>
                    <li><a href="#testimonials">Polecają</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#pricing">Cennik</a></li>
                    <li><a href="#reviews">Opinie</a></li>
                    <li><a href="#footer">Kontakt</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <div class="container">
            <ul>
                <li><a href="#hero">Strona główna</a></li>
                <li><a href="#courses">O mnie</a></li>
                <li><a href="#testimonials">Polecają</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#pricing">Cennik</a></li>
                <li><a href="#reviews">Opinie</a></li>
                <li><a href="#footer">Kontakt</a></li>
            </ul>
        </div>
    </div>
</header>
