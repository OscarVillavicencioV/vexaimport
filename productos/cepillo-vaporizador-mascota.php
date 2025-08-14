<?php
require_once '../config.php';

$slug = 'cepillo-vaporizador-mascota';
$producto = getProductData($slug);

if (!$producto) {
    header('Location: ../');
    exit;
}

// Meta tags específicos del producto
$meta_title = $producto['titulo'] . ' - ' . SITE_NAME;
$meta_description = $producto['descripcion_completa'] . ' Envío gratis. Garantía 30 días.';
$meta_keywords = 'cepillo vaporizador mascota, productos tiktok, viral, pets, grooming';
$meta_image = SITE_URL . '/' . $producto['imagenes']['main'];

$css_path = '../assets/';
$js_path = '../assets/js/';
$home_path = '../';
$images_path = '../assets/images/';

// Configuración de imágenes para el header - RUTAS ABSOLUTAS
// Imágenes movidas al contenido principal
$legal_path = '../legal/';
$include_tiktok_css = true;
$hide_header = true; // Ocultar header en página de producto

include '../includes/header.php';

$whatsapp_url = getWhatsAppURL($producto['titulo'], $producto['precio']);
?>

<style>
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes heartbeat {
    0% { transform: scale(1); }
    14% { transform: scale(1.1); }
    28% { transform: scale(1); }
    42% { transform: scale(1.1); }
    70% { transform: scale(1); }
}

/* Botón flotante - idéntico al botón principal */
.floating-whatsapp-btn {
    position: fixed;
    bottom: 20px;
    left: 1rem;
    right: 1rem;
    z-index: 1000;
    background: #25D366;
    color: white;
    border-radius: 15px;
    text-decoration: none;
    font-size: 1.3rem;
    font-weight: bold;
    display: none;
    align-items: center;
    justify-content: center;
    gap: 0.3rem;
    box-shadow: 0 4px 15px rgba(37,211,102,0.3);
    transition: all 0.3s ease;
    animation: heartbeat 2s infinite;
    height: 80px;
    max-width: 468px;
    margin: 0 auto;
    padding: 0;
    text-align: center;
    border: none;
}

.floating-whatsapp-btn.show {
    display: flex;
}

.floating-whatsapp-btn:hover {
    transform: scale(1.02);
    box-shadow: 0 6px 20px rgba(37,211,102,0.4);
}

.floating-whatsapp-btn img {
    padding: 0 !important;
    margin: 0 !important;
}
</style>

<main class="tiktok-instant-page">
    <!-- Urgency Banner -->
    <div class="urgency-banner">
        Pago contra entrega y envío GRATIS a todo el Perú
    </div>

    <!-- Imágenes del header movidas aquí -->
    <section class="header-images-section" style="background: white; padding: 0; text-align: center;">
        <!-- Logo cabezal OCULTO -->
        <!-- <div class="header-logo" style="margin: 0;">
            <img src="../assets/images/logo_cabezal.svg" alt="<?php echo SITE_NAME; ?>" class="logo-cabezal">
        </div> -->
        
        <!-- Imagen del producto -->
        <div class="product-header-image" style="margin: 0;">
            <img src="../productos/images/cepillo-vaporizador/imagen1.png" alt="Producto principal" class="imagen-producto-header" loading="eager">
        </div>
        
        <!-- Imagen de precio OCULTA -->
        <!-- <div class="price-header-image" style="margin: 0;">
            <img src="../productos/images/cepillo-vaporizador/Precio.png" alt="Precio especial" class="imagen-precio-header">
        </div> -->
    </section>

    <!-- Contenedor principal con nombre del producto, precio y botón WhatsApp -->
    <section style="background: white; padding: 1rem 0.5rem; margin: 0;">
        <div style="background: white; border-radius: 15px; padding: 1rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto;">
            
            <!-- Nombre del producto en la parte superior -->
            <div style="text-align: center; margin-bottom: 1rem;">
                <div style="color: #009cfe; font-size: 2rem; font-weight: bold; line-height: 1.1;"> 
                    Cepillo Vaporizador para Mascotas
                </div>
            </div>
            
            <!-- Grid de precio y botón con altura exactamente igual -->
            <div style="display: block; width: 100%;">
                <!-- Botón WhatsApp con precio incluido - AMPLIADO LATERALMENTE -->
                <div style="width: 100%; margin: 0 -0.5rem;">
                    <a href="https://wa.me/+51955175019?text=Hola,%20me%20interesa%20el%20cepillo%20vaporizador%20para%20mascota" 
                       class="whatsapp-main-btn" 
                       target="_blank"
                       style="background: #25D366 !important; color: white !important; border-radius: 15px; text-decoration: none; font-size: 1.4rem; font-weight: bold; display: flex !important; align-items: center; justify-content: space-between; gap: 0 !important; box-shadow: 0 4px 15px rgba(37,211,102,0.3); transition: all 0.3s ease; animation: heartbeat 2s infinite; height: 80px; width: calc(100% + 1rem); padding: 0 1rem !important; margin: 0 !important; text-align: center; border: none; overflow: hidden; min-width: 320px;">
                        <img src="../assets/images/logo_whatsapp.png" alt="WhatsApp" style="width: 45px; height: 45px; padding: 0 !important; margin: 0 0.5rem 0 0 !important; flex-shrink: 0;">
                        <span style="padding: 0 !important; margin: 0 !important; line-height: 1.2; flex-shrink: 0; flex-grow: 1; text-align: center; font-size: 1.3rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">Pedir por WhatsApp a S/39</span>
                        <div style="width: 45px; height: 45px; flex-shrink: 0; opacity: 0;"></div>
                    </a>
                </div>
            </div>
            
            <!-- Información de envío debajo -->
            <div style="margin-top: 1rem; text-align: center; color: #009cfe; font-size: 1.1rem; font-weight: 600; background: rgba(0,156,254,0.1); padding: 1rem; border-radius: 10px;">
                🚚 Envío GRATIS y pago contra entrega a todo el Perú
            </div>
        </div>
    </section>

    <!-- Nuevo contenedor con imagen2.png -->
    <section style="background: white; padding: 1rem; margin: 0;">
        <div style="background: white; border-radius: 15px; padding: 1.5rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto; text-align: center;">
            <img src="../productos/images/cepillo-vaporizador/imagen2.png" alt="Cepillo Vaporizador - Imagen 2" style="width: 100%; height: auto; border-radius: 10px;" loading="lazy">
        </div>
    </section>

    <!-- Contenedor de stock entre imagen2 e imagen3 -->
    <section style="background: white; padding: 1rem; margin: 0;">
        <div style="background: linear-gradient(135deg, #ff6b6b 0%, #ee5a24 100%); border-radius: 15px; padding: 1.5rem; box-shadow: 0 4px 15px rgba(255,107,107,0.3); max-width: 500px; margin: 0 auto; text-align: center;">
            <div id="stock-indicator" style="color: white; font-size: 1.3rem; font-weight: bold; animation: pulse 2s infinite;">
                ¡Solo quedan <span id="stock-count">47</span> unidades!
            </div>
        </div>
    </section>

    <!-- Nuevo contenedor con imagen3.png -->
    <section style="background: white; padding: 1rem; margin: 0;">
        <div style="background: white; border-radius: 15px; padding: 1.5rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto; text-align: center;">
            <h3 style="color: #009cfe; font-size: 2rem; font-weight: bold; margin-bottom: 1rem; margin-top: 0;">Fácil de usar</h3>
            <img src="../productos/images/cepillo-vaporizador/imagen3.png" alt="Cepillo Vaporizador - Imagen 3" style="width: 100%; height: auto; border-radius: 10px;" loading="lazy">
        </div>
    </section>

    <!-- Nuevo contenedor con imagen5.jpeg -->
    <section style="background: white; padding: 1rem; margin: 0;">
        <div style="background: white; border-radius: 15px; padding: 1.5rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto; text-align: center;">
            <img src="../productos/images/cepillo-vaporizador/imagen5.jpeg" alt="Cepillo Vaporizador - Imagen 5" style="width: 100%; height: auto; border-radius: 10px;" loading="lazy">
        </div>
    </section>

    <!-- Contenedor "Ideal para tu mascota" con imágenes en triángulo -->
    <section style="background: white; padding: 1rem; margin: 0;">
        <div style="background: white; border-radius: 15px; padding: 1.5rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto; text-align: center;">
            <h3 style="color: #009cfe; font-size: 2rem; font-weight: bold; margin-bottom: 1.5rem; margin-top: 0;">Ideal para tu mascota</h3>
            
            <!-- Distribución en triángulo -->
            <div style="display: flex; flex-direction: column; align-items: center; gap: 1.5rem;">
                <!-- Imagen superior centrada (perro) -->
                <div style="display: flex; justify-content: center;">
                    <img src="../productos/images/cepillo-vaporizador/perro.png" alt="Ideal para perros" style="width: 120px; height: 120px; border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.15); object-fit: cover;" loading="lazy">
                </div>
                
                <!-- Imágenes inferiores (conejo y gato) -->
                <div style="display: flex; justify-content: center; gap: 3rem;">
                    <img src="../productos/images/cepillo-vaporizador/conejo.png" alt="Ideal para conejos" style="width: 120px; height: 120px; border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.15); object-fit: cover;" loading="lazy">
                    <img src="../productos/images/cepillo-vaporizador/gato.png" alt="Ideal para gatos" style="width: 120px; height: 120px; border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.15); object-fit: cover;" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Contenedor de Dimensiones movido aquí -->
    <section style="background: white; padding: 1rem; margin: 0;">
        <div style="background: white; border-radius: 15px; padding: 1.5rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto; text-align: center;">
            <h3 style="color: #009cfe; font-size: 2rem; font-weight: bold; margin-bottom: 1rem; margin-top: 0;">Dimensiones</h3>
            <img src="../productos/images/cepillo-vaporizador/imagen4.png" alt="Cepillo Vaporizador - Imagen 4" style="width: 100%; height: auto; border-radius: 10px;" loading="lazy">
        </div>
    </section>

    <!-- Nuevo contenedor de Ofertas con 2 columnas -->
    <section style="background: white; padding: 1rem; margin: 0;">
        <div style="background: white; border-radius: 15px; padding: 1.5rem; box-shadow: 0 4px 15px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto; text-align: center;">
            <h3 style="color: #009cfe; font-size: 2rem; font-weight: bold; margin-bottom: 1rem; margin-top: 0;">Ofertas</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div style="text-align: center;">
                    <img src="../productos/images/cepillo-vaporizador/productox1.png" alt="Producto X1" style="width: 100%; height: auto; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: transform 0.2s ease;" loading="lazy">
                    <div style="margin-top: 0.8rem; font-size: 1.1rem; font-weight: bold; color: #333; text-align: center;">1 unidad</div>
                    <div style="margin-top: 0.3rem; font-size: 1.3rem; font-weight: bold; color: #25D366; text-align: center;">S/39</div>
                </div>
                <div style="text-align: center;">
                    <img src="../productos/images/cepillo-vaporizador/productox2.png" alt="Producto X2" style="width: 100%; height: auto; border-radius: 15px; box-shadow: 0 4px 12px rgba(0,0,0,0.15); transition: transform 0.2s ease;" loading="lazy">
                    <div style="margin-top: 0.8rem; font-size: 1.1rem; font-weight: bold; color: #333; text-align: center;">2 unidades</div>
                    <div style="margin-top: 0.3rem; font-size: 1.3rem; font-weight: bold; color: #25D366; text-align: center;">S/69</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section" style="background: white; padding: 2rem 1rem; margin: 0;">
        <div style="max-width: 500px; margin: 0 auto;">
            <h2 style="color: #009cfe; font-size: 1.8rem; font-weight: bold; text-align: center; margin-bottom: 1.5rem;">🌟 ¿Por qué elegir <?php echo $producto['titulo']; ?>?</h2>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <?php foreach($producto['beneficios'] as $beneficio): ?>
                <li style="background: white; border-radius: 10px; padding: 1rem; margin-bottom: 0.8rem; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: flex; align-items: center; gap: 1rem;">
                    <span style="font-size: 1.2rem;">✅</span>
                    <p style="margin: 0; font-size: 1rem; color: #333; line-height: 1.4;"><?php echo $beneficio; ?></p>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>



    <!-- CTA Section Final -->
    <section class="final-cta-section" style="background: #009cfe; color: white; padding: 1rem 0; text-align: center;">
        <div class="container">
            <h2>🚀 ¡No esperes más!</h2>
            <p style="font-size: 1.3rem; margin: 1rem 0;">Miles de clientes ya disfrutan de este producto viral</p>
            <div style="display: flex; flex-direction: column; align-items: center; gap: 1rem; margin: 2rem 0; max-width: 300px; margin-left: auto; margin-right: auto;">
                <div style="background: rgba(255,255,255,0.2); padding: 0.5rem; border-radius: 15px; width: 100%; text-align: center;">
                    <strong>🚚 Envío Gratis</strong><br>
                    Entrega el mismo día
                </div>
                <div style="background: rgba(255,255,255,0.2); padding: 0.5rem; border-radius: 15px; width: 100%; text-align: center;">
                    <strong>🔄 Garantía</strong><br>
                    30 días
                </div>
                <div style="background: rgba(255,255,255,0.2); padding: 0.5rem; border-radius: 15px; width: 100%; text-align: center;">
                    <strong>💳 Pago contra entrega</strong><br>
                    Págalo cuando lo recibas
                </div>
                <div style="background: rgba(255,255,255,0.2); padding: 0.5rem; border-radius: 15px; width: 100%; text-align: center;">
                    <strong>💯 Satisfacción</strong><br>
                    Más de 4560 clientes felices
                </div>
            </div>

        </div>
    </section>
</main>

<!-- Botón flotante de WhatsApp - idéntico al botón principal -->
<a href="https://wa.me/+51955175019?text=Hola,%20me%20interesa%20el%20cepillo%20vaporizador%20para%20mascota" 
   id="floating-whatsapp"
   class="floating-whatsapp-btn" 
   target="_blank">
    <img src="../assets/images/logo_whatsapp.png" alt="WhatsApp" style="width: 50px; height: 50px; padding: 0; margin: 0;">
    Pedir por WhatsApp a S/39
</a>

<script>
// Contador de stock dinámico con intervalos aleatorios
document.addEventListener('DOMContentLoaded', function() {
    const stockElement = document.getElementById('stock-count');
    let currentStock = parseInt(stockElement.textContent);
    const minStock = 5;
    
    function getRandomInterval() {
        // Intervalo aleatorio entre 1000ms (1s) y 4000ms (4s)
        return Math.floor(Math.random() * 3000) + 1000;
    }
    
    function reduceStock() {
        if (currentStock > minStock) {
            currentStock--;
            stockElement.textContent = currentStock;
            
            // Agregar efecto visual cuando se reduce
            stockElement.parentElement.style.animation = 'none';
            setTimeout(() => {
                stockElement.parentElement.style.animation = 'pulse 2s infinite';
            }, 100);
            
            // Programar la siguiente reducción con intervalo aleatorio
            setTimeout(reduceStock, getRandomInterval());
        }
    }
    
    // Iniciar el primer ciclo con intervalo aleatorio
    setTimeout(reduceStock, getRandomInterval());
});

// Botón flotante - mostrar/ocultar según scroll
document.addEventListener('DOMContentLoaded', function() {
    const floatingBtn = document.getElementById('floating-whatsapp');
    const mainWhatsappBtn = document.querySelector('.whatsapp-main-btn');
    
    function checkButtonVisibility() {
        const btnRect = mainWhatsappBtn.getBoundingClientRect();
        const isVisible = btnRect.top >= 0 && btnRect.bottom <= window.innerHeight;
        
        if (!isVisible && btnRect.top < 0) {
            // El botón principal está fuera de vista (arriba)
            floatingBtn.classList.add('show');
        } else {
            // El botón principal está visible
            floatingBtn.classList.remove('show');
        }
    }
    
    // Verificar visibilidad en scroll
    window.addEventListener('scroll', checkButtonVisibility);
    // Verificar visibilidad inicial
    checkButtonVisibility();
});

// TikTok Pixel - Product View específico
document.addEventListener('DOMContentLoaded', function() {
    // Track product view
    if (typeof ttq !== 'undefined') {
        ttq.track('ViewContent', {
            content_type: 'product',
            content_id: '<?php echo $slug; ?>',
            content_name: '<?php echo addslashes($producto['titulo']); ?>',
            value: <?php echo getPriceValue($producto['precio']); ?>,
            currency: 'USD'
        });
    }

    // Track cuando hace scroll a la sección de beneficios
    const benefitsSection = document.querySelector('.benefits-section');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && typeof ttq !== 'undefined') {
                ttq.track('ClickButton', {
                    content_type: 'engagement',
                    content_name: 'Benefits section viewed'
                });
            }
        });
    });
    observer.observe(benefitsSection);

    // Track WhatsApp clicks específicamente (botones principales y flotante)
    document.querySelectorAll('a[href*="wa.me"]').forEach(link => {
        link.addEventListener('click', function() {
            if (typeof ttq !== 'undefined') {
                ttq.track('Contact', {
                    content_type: 'whatsapp',
                    content_id: '<?php echo $slug; ?>',
                    content_name: '<?php echo addslashes($producto['titulo']); ?>',
                    value: <?php echo getPriceValue($producto['precio']); ?>,
                    currency: 'USD'
                });
            }
        });
    });
});
</script>

<?php include '../includes/footer.php'; ?>
