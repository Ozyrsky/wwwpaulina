<?php
if (!defined('SECURE_ACCESS')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Bezpośredni dostęp zabroniony');
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $config['site_name']; ?></title>
    <meta name="description" content="<?php echo $config['site_description']; ?>">
    <meta name="keywords" content="stylizacja rzęs, stylizacja brwi, mezoterapia, salon kosmetyczny, Warszawa">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $config['site_url']; ?>">
    <meta property="og:title" content="<?php echo $config['site_name']; ?>">
    <meta property="og:description" content="<?php echo $config['site_description']; ?>">
    <meta property="og:image" content="<?php echo $config['logo_path']; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $config['site_url']; ?>">
    <meta property="twitter:title" content="<?php echo $config['site_name']; ?>">
    <meta property="twitter:description" content="<?php echo $config['site_description']; ?>">
    <meta property="twitter:image" content="<?php echo $config['logo_path']; ?>">
    
    <link rel="icon" href="<?php echo $config['logo_path']; ?>" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cardo:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
