<?php
require_once 'config.php';

// Meta tags para la página principal
$meta_title = SITE_NAME . ' - Productos Trending de TikTok 🔥';
$meta_description = 'Descubre los productos más populares y virales de TikTok. Envío gratis, mejor precio garantizado. ¡Compra ahora!';
$meta_keywords = 'tiktok productos, trending, viral, productos populares, envío gratis';
$css_path = 'assets/';
$home_path = './';
$legal_path = 'legal/';

// Ocultar logo del header en página principal
$hide_header_logo = true;

include 'includes/header.php';
?>

<main class="products-landing">
    <!-- Logo Section -->
    <section class="logo-main-section">
        <div class="container">
            <div class="logo-container">
                <img src="assets/images/logo_cabezal.svg" alt="<?php echo SITE_NAME; ?>" class="main-logo">
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>🔥 Los Productos Más <span class="highlight">Trending</span> de TikTok</h1>
                <p class="hero-subtitle">Descubre los productos virales que todos están comprando</p>
                <div class="hero-badges">
                    <span class="badge">🚚 Envío Gratis</span>
                    <span class="badge">⚡ Entrega 24-48h</span>
                    <span class="badge">💯 Garantía Total</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section id="productos" class="products-section">
        <div class="container">
            <h2 class="section-title">🛍️ Nuestros Productos Virales</h2>
            <div class="products-grid">
                <?php foreach($productos as $slug => $producto): ?>
                <div class="product-card" onclick="window.location.href='producto/<?php echo $slug; ?>'">
                    <div class="product-image">
                        <img src="<?php echo $producto['imagenes']['main']; ?>" alt="<?php echo $producto['titulo']; ?>" loading="lazy">
                        <div class="discount-badge"><?php echo $producto['descuento']; ?> OFF</div>
                        <div class="trending-badge">🔥 VIRAL</div>
                    </div>
                    <div class="product-info">
                        <h3><?php echo $producto['titulo']; ?></h3>
                        <p class="description"><?php echo $producto['descripcion_corta']; ?></p>
                        <div class="price-container">
                            <span class="current-price"><?php echo $producto['precio']; ?></span>
                            <span class="original-price"><?php echo $producto['precio_original']; ?></span>
                        </div>
                        <div class="product-benefits">
                            <span class="benefit">✅ Envío Gratis</span>
                            <span class="benefit">✅ 30 Días Garantía</span>
                        </div>
                        <button class="cta-button">
                            <span>Ver Producto</span>
                            <span class="button-icon">🚀</span>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section class="trust-section">
        <div class="container">
            <h2>¿Por qué elegir <?php echo SITE_NAME; ?>?</h2>
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-icon">🚚</div>
                    <h3>Envío Gratis</h3>
                    <p>Entrega en 24-48 horas sin costo adicional</p>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">🔒</div>
                    <h3>Pago Seguro</h3>
                    <p>Transacciones 100% seguras y protegidas</p>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">🔄</div>
                    <h3>Garantía Total</h3>
                    <p>30 días para devoluciones sin preguntas</p>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">⭐</div>
                    <h3>Productos Virales</h3>
                    <p>Solo los productos más populares de TikTok</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// TikTok Pixel - Track página principal
ttq.track('ViewContent', {
    content_type: 'home',
    content_name: 'Homepage'
});

// Track clicks en productos
document.querySelectorAll('.product-card').forEach(card => {
    card.addEventListener('click', function() {
        const productTitle = this.querySelector('h3').textContent;
        ttq.track('ClickButton', {
            content_type: 'product',
            content_name: productTitle
        });
    });
});
</script>

<?php include 'includes/footer.php'; ?>
