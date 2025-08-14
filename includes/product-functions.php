<?php
/**
 * Funciones específicas para manejo de productos
 * Mi Tienda TikTok
 */

// Incluir configuración si no está ya incluida
if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/../config.php';
}

/**
 * Obtener todos los productos disponibles
 */
function getAllProducts() {
    global $productos;
    return $productos;
}

/**
 * Obtener productos destacados o más populares
 */
function getFeaturedProducts($limit = 3) {
    global $productos;
    return array_slice($productos, 0, $limit, true);
}

/**
 * Buscar productos por término de búsqueda
 */
function searchProducts($searchTerm) {
    global $productos;
    $results = [];
    
    foreach ($productos as $slug => $producto) {
        if (stripos($producto['titulo'], $searchTerm) !== false || 
            stripos($producto['descripcion_corta'], $searchTerm) !== false ||
            stripos($producto['descripcion_completa'], $searchTerm) !== false) {
            $results[$slug] = $producto;
        }
    }
    
    return $results;
}

/**
 * Generar schema markup para producto (SEO)
 */
function generateProductSchema($slug, $producto) {
    $schema = [
        "@context" => "https://schema.org/",
        "@type" => "Product",
        "name" => $producto['titulo'],
        "description" => $producto['descripcion_completa'],
        "image" => [
            SITE_URL . '/' . $producto['imagenes']['main']
        ],
        "brand" => [
            "@type" => "Brand",
            "name" => SITE_NAME
        ],
        "offers" => [
            "@type" => "Offer",
            "url" => SITE_URL . '/producto/' . $slug,
            "priceCurrency" => "USD",
            "price" => getPriceValue($producto['precio']),
            "priceValidUntil" => date('Y-m-d', strtotime('+30 days')),
            "availability" => "https://schema.org/InStock",
            "seller" => [
                "@type" => "Organization",
                "name" => SITE_NAME
            ]
        ],
        "aggregateRating" => [
            "@type" => "AggregateRating",
            "ratingValue" => "4.8",
            "reviewCount" => "247",
            "bestRating" => "5",
            "worstRating" => "1"
        ]
    ];
    
    // Agregar imágenes de galería
    foreach ($producto['imagenes']['gallery'] as $imagen) {
        $schema['image'][] = SITE_URL . '/' . $imagen;
    }
    
    return json_encode($schema, JSON_UNESCAPED_SLASHES);
}

/**
 * Generar breadcrumbs para navegación
 */
function generateBreadcrumbs($currentPage, $productName = null) {
    $breadcrumbs = [
        [
            'name' => 'Inicio',
            'url' => '../'
        ]
    ];
    
    if ($currentPage === 'product' && $productName) {
        $breadcrumbs[] = [
            'name' => 'Productos',
            'url' => '../#productos'
        ];
        $breadcrumbs[] = [
            'name' => $productName,
            'url' => '#'
        ];
    } elseif ($currentPage === 'legal') {
        $breadcrumbs[] = [
            'name' => 'Legal',
            'url' => '#'
        ];
    }
    
    return $breadcrumbs;
}

/**
 * Calcular descuento porcentual
 */
function calculateDiscountPercentage($originalPrice, $currentPrice) {
    $original = getPriceValue($originalPrice);
    $current = getPriceValue($currentPrice);
    
    if ($original <= 0) return 0;
    
    $discount = (($original - $current) / $original) * 100;
    return round($discount);
}

/**
 * Formatear precio para mostrar
 */
function formatPrice($price) {
    $numericPrice = getPriceValue($price);
    return '$' . number_format($numericPrice, 2);
}

/**
 * Generar mensaje de WhatsApp optimizado para conversión
 */
function generateOptimizedWhatsAppMessage($producto, $precio, $urgency = false) {
    $message = "🔥 ¡Hola! Me interesa este producto VIRAL de TikTok:\n\n";
    $message .= "📱 *" . $producto . "*\n";
    $message .= "💰 Precio especial: *" . $precio . "*\n\n";
    
    if ($urgency) {
        $message .= "⚡ Vi que tienen oferta limitada, ¿aún está disponible?\n\n";
    }
    
    $message .= "¿Podrían confirmarme:\n";
    $message .= "✅ Disponibilidad\n";
    $message .= "🚚 Tiempo de entrega\n";
    $message .= "💳 Métodos de pago\n\n";
    $message .= "¡Gracias! 😊";
    
    return $message;
}

/**
 * Generar URL completa de producto
 */
function getProductURL($slug) {
    return SITE_URL . '/producto/' . $slug;
}

/**
 * Verificar si un producto existe
 */
function productExists($slug) {
    return getProductData($slug) !== null;
}

/**
 * Obtener productos relacionados (simulado por ahora)
 */
function getRelatedProducts($currentSlug, $limit = 3) {
    global $productos;
    $related = [];
    $count = 0;
    
    foreach ($productos as $slug => $producto) {
        if ($slug !== $currentSlug && $count < $limit) {
            $related[$slug] = $producto;
            $count++;
        }
    }
    
    return $related;
}

/**
 * Generar meta tags dinámicos para producto
 */
function generateProductMetaTags($producto, $slug) {
    return [
        'title' => $producto['titulo'] . ' - ' . SITE_NAME,
        'description' => $producto['descripcion_completa'] . ' Envío gratis. Garantía 30 días. ¡Compra ahora!',
        'keywords' => 'tiktok, viral, trending, ' . strtolower(str_replace(' ', ', ', $producto['titulo'])),
        'image' => SITE_URL . '/' . $producto['imagenes']['main'],
        'url' => getProductURL($slug),
        'type' => 'product'
    ];
}

/**
 * Logging de eventos de productos (para analytics)
 */
function logProductEvent($event, $productSlug, $additionalData = []) {
    $logData = [
        'timestamp' => date('Y-m-d H:i:s'),
        'event' => $event,
        'product_slug' => $productSlug,
        'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
        'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? 'unknown',
        'additional_data' => $additionalData
    ];
    
    // En un entorno real, esto se guardaría en base de datos o archivo de log
    // Por ahora solo lo documentamos para futuras implementaciones
    return true;
}

/**
 * Generar URL de imagen optimizada
 */
function getOptimizedImageURL($imagePath, $size = 'medium') {
    // En un entorno real, esto generaría URLs para imágenes optimizadas
    // Por ahora retorna la URL original
    return $imagePath;
}

/**
 * Validar datos de producto antes de mostrar
 */
function validateProductData($producto) {
    $required_fields = ['titulo', 'precio', 'descripcion_corta', 'imagenes'];
    
    foreach ($required_fields as $field) {
        if (!isset($producto[$field]) || empty($producto[$field])) {
            return false;
        }
    }
    
    return true;
}
?>
