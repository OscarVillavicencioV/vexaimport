<?php
if (!defined('TIKTOK_PIXEL_ID')) {
    require_once __DIR__ . '/../config.php';
}

// Meta tags dinámicos
$page_title = isset($meta_title) ? $meta_title : $default_meta['title'];
$page_description = isset($meta_description) ? $meta_description : $default_meta['description'];
$page_keywords = isset($meta_keywords) ? $meta_keywords : $default_meta['keywords'];
$page_image = isset($meta_image) ? $meta_image : $default_meta['image'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Meta Tags SEO -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($page_image); ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">
    <meta property="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="twitter:image" content="<?php echo htmlspecialchars($page_image); ?>">
    
    <!-- TikTok Pixel Code -->
    <script>
    !function (w, d, t) {
        w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)};
        
        ttq.load('<?php echo TIKTOK_PIXEL_ID; ?>');
        ttq.page();
    }(window, document, 'ttq');
    </script>
    <!-- End TikTok Pixel Code -->
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo isset($css_path) ? $css_path : '../assets/'; ?>style.css">
    <?php if (isset($include_tiktok_css) && $include_tiktok_css): ?>
    <link rel="stylesheet" href="<?php echo isset($css_path) ? $css_path : '../assets/'; ?>tiktok-landing.css">
    <?php endif; ?>
    
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <?php if (!isset($hide_header) || !$hide_header): ?>
    <header class="main-header">
        <div class="container">
            <!-- Logo cabezal (solo si no está oculto) -->
            <?php if (!isset($hide_header_logo) || !$hide_header_logo): ?>
            <div class="header-logo">
                <?php if (isset($header_logo)): ?>
                    <img src="<?php echo $header_logo; ?>" alt="<?php echo SITE_NAME; ?>" class="logo-cabezal">
                <?php else: ?>
                    <img src="assets/images/logo_cabezal.svg" alt="<?php echo SITE_NAME; ?>" class="logo-cabezal">
                <?php endif; ?>
            </div>
            <?php endif; ?>
            
            <!-- Imagen del producto específico -->
            <?php if (isset($header_product_image)): ?>
            <div class="product-header-image">
                <img src="<?php echo $header_product_image; ?>" alt="Producto principal" class="imagen-producto-header">
            </div>
            <?php endif; ?>
            
            <!-- Imagen de precio -->
            <?php if (isset($header_price_image)): ?>
            <div class="price-header-image">
                <img src="<?php echo $header_price_image; ?>" alt="Precio especial" class="imagen-precio-header">
            </div>
            <?php endif; ?>
            
            <?php if (!isset($hide_nav) || !$hide_nav): ?>
            <nav class="main-nav">
                <ul>
                    <li><a href="<?php echo isset($home_path) ? $home_path : '../'; ?>">🏠 Inicio</a></li>
                    <li><a href="<?php echo isset($home_path) ? $home_path : '../'; ?>#productos">🛍️ Productos</a></li>
                    <li><a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" class="whatsapp-nav">
                        <img src="<?php echo isset($css_path) ? $css_path : '../assets/'; ?>images/logo_whatsapp.png" alt="WhatsApp" class="whatsapp-icon">
                    </a></li>
                </ul>
            </nav>
            <?php endif; ?>
        </div>
    </header>
    <?php endif; ?>
