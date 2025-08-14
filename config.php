<?php
// filepath: mi-tienda/config.php

// Configuración del sitio
define('SITE_NAME', 'Vexa Import');
define('SITE_URL', 'https://vexaimport.com'); // 🔧 CAMBIAR por tu dominio real
define('WHATSAPP_NUMBER', '+51955175019'); // 🔧 Número de WhatsApp actualizado

// TikTok Pixel ID
define('TIKTOK_PIXEL_ID', 'TU_PIXEL_ID_AQUI'); // 🔧 CAMBIAR por tu TikTok Pixel ID real

// Función helper para rutas de imágenes
function getImagePath($relativePath, $currentPath = '') {
    // Determinar el nivel de profundidad basado en la ruta actual
    if (strpos($_SERVER['REQUEST_URI'], '/productos/') !== false) {
        // Estamos en una página de producto
        return '../' . $relativePath;
    } else {
        // Estamos en el directorio raíz
        return $relativePath;
    }
}

// Función helper para rutas de imágenes de productos
function getProductImagePath($imagePath) {
    // Si estamos en una página de producto, las imágenes están en el mismo nivel
    return $imagePath;
}

// Configuración de productos
$productos = [
    'cepillo-vaporizador-mascota' => [
        'titulo' => 'Cepillo Vaporizador para Mascotas 🐕',
        'precio' => 'S/39',
        'precio_original' => 'S/59.99',
        'descuento' => '50%',
        'descripcion_corta' => 'Elimina el pelo suelto y masajea a tu mascota con vapor suave',
        'imagenes' => [
            'main' => 'productos/images/cepillo-vaporizador/imagen1.png',
            'gallery' => [
                'productos/images/cepillo-vaporizador/gallery-1.jpg',
                'productos/images/cepillo-vaporizador/gallery-2.jpg',
                'productos/images/cepillo-vaporizador/gallery-3.jpg'
            ]
        ],
        'beneficios' => [
            'Masaje relajante para tu mascota',
            'Tecnología de vapor suave y segura',
            'Fácil de limpiar y mantener',
            'Batería de larga duración',
            'Adecuado para todas las razas'
        ],
        'descripcion_completa' => 'El Cepillo Vaporizador revolucionario que combina la eliminación efectiva del pelo suelto con un relajante masaje de vapor. Perfecto para mantener a tu mascota limpia, cómoda y libre de pelo suelto.',
        'especificaciones' => [
            'Dimensiones' => '25 x 8 x 6 cm',
            'Peso' => '400g',
            'Batería' => 'Litio 2000mAh',
            'Tiempo de carga' => '2-3 horas',
            'Autonomía' => '45-60 minutos',
            'Material' => 'ABS + Silicona'
        ]
    ]
];

// Función para obtener datos del producto
function getProductData($slug) {
    global $productos;
    return isset($productos[$slug]) ? $productos[$slug] : null;
}

// Función para generar mensaje de WhatsApp
function getWhatsAppMessage($producto, $precio) {
    // Mensaje específico para el cepillo vaporizador
    if (strpos(strtolower($producto), 'cepillo vaporizador') !== false) {
        $mensaje = "Hola, me interesa el cepillo vaporizador para mascota";
    } else {
        $mensaje = "¡Hola! 👋 Me interesa el producto: *{$producto}* por {$precio}. ¿Podrías darme más información? 😊";
    }
    return urlencode($mensaje);
}

// Función para obtener URL de WhatsApp
function getWhatsAppURL($producto, $precio) {
    $mensaje = getWhatsAppMessage($producto, $precio);
    return "https://wa.me/" . WHATSAPP_NUMBER . "?text=" . $mensaje;
}

// Función para formatear precio (quitar símbolos para cálculos)
function getPriceValue($precio) {
    return floatval(str_replace(['$', ','], '', $precio));
}

// Meta tags por defecto
$default_meta = [
    'title' => SITE_NAME . ' - Productos Trending de TikTok',
    'description' => 'Descubre los productos más populares de TikTok. Envío gratis, mejor precio garantizado.',
    'keywords' => 'tiktok productos, trending, viral, mascota, cepillo vaporizador',
    'image' => SITE_URL . '/assets/images/og-image.jpg'
];
?>
