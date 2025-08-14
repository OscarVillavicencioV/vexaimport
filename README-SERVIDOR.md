# VEXAIMPORT - Instrucciones de Configuración

## Archivos incluidos:
- Sitio web completo listo para producción
- Configuración PHP optimizada
- URLs amigables configuradas
- TikTok Pixel integrado

## Configuración requerida antes del despliegue:

### 1. Actualizar config.php:
- Cambiar `SITE_URL` por tu dominio real
- Configurar `TIKTOK_PIXEL_ID` con tu Pixel ID real
- Verificar el número de WhatsApp

### 2. Configuración del servidor:
- PHP 7.4 o superior
- mod_rewrite habilitado
- Permisos de escritura en carpetas de imágenes

### 3. SSL requerido:
- El sitio está configurado para HTTPS
- Configurar certificado SSL en EasyPanel

## Estructura del proyecto:
```
vexaimport/
├── index.php (página principal)
├── config.php (configuración)
├── .htaccess (URLs amigables)
├── assets/ (CSS, JS, imágenes)
├── includes/ (archivos PHP reutilizables)
├── legal/ (páginas legales)
└── productos/ (páginas de productos)
```

## Contacto de soporte:
WhatsApp: +51955175019
