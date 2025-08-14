<?php
require_once '../config.php';

$meta_title = 'Política de Privacidad - ' . SITE_NAME;
$meta_description = 'Conoce cómo protegemos y manejamos tu información personal en ' . SITE_NAME;
$css_path = '../assets/';
$home_path = '../';
$legal_path = './';

// Ocultar logo del header pero mantener navegación
$hide_header_logo = true;

include '../includes/header.php';
?>

<main class="legal-page">
    <div class="container">
        <div class="legal-content">
            <h1>🔒 Política de Privacidad</h1>
            <p class="last-updated"><strong>Última actualización: 12 de agosto de 2025</strong></p>

            <section class="legal-section">
                <h2>1. Información que Recopilamos</h2>
                <p>En <?php echo SITE_NAME; ?>, somos una tienda de dropshipping que facilita la venta de productos a través de WhatsApp. Recopilamos información que usted nos proporciona directamente cuando:</p>
                <ul>
                    <li>Hace clic en nuestros botones de WhatsApp y es redirigido a la aplicación</li>
                    <li>Realiza una consulta o pedido por WhatsApp</li>
                    <li>Navega por nuestro sitio web</li>
                    <li>Se comunica con nosotros para soporte</li>
                </ul>
                
                <h3>📝 Información Personal para Procesamiento de Pedidos:</h3>
                <p>Para completar su pedido y realizar el envío, solicitamos únicamente:</p>
                <ul>
                    <li><strong>Nombre completo:</strong> Para identificar al destinatario</li>
                    <li><strong>Dirección completa de entrega:</strong> Para coordinar el envío</li>
                    <li><strong>Número de teléfono:</strong> Para confirmar la entrega</li>
                </ul>
                
                <h3>🌐 Información de Navegación:</h3>
                <ul>
                    <li>Dirección IP (para seguridad y análisis geográfico)</li>
                    <li>Tipo de dispositivo y navegador</li>
                    <li>Páginas visitadas en nuestro sitio</li>
                    <li>Tiempo de permanencia en el sitio</li>
                </ul>
            </section>

            <section class="legal-section">
                <h2>2. Cómo Utilizamos su Información</h2>
                <p><strong>Como tienda de dropshipping</strong>, utilizamos la información recopilada exclusivamente para:</p>
                <ul>
                    <li>✅ <strong>Procesamiento de pedidos:</strong> Gestionar su solicitud desde WhatsApp hasta la entrega</li>
                    <li>✅ <strong>Coordinación de envíos:</strong> Comunicarnos con empresas de mensajería autorizadas</li>
                    <li>✅ <strong>Confirmación de entregas:</strong> Verificar que recibió su producto correctamente</li>
                    <li>✅ <strong>Atención al cliente:</strong> Resolver consultas y brindar soporte técnico</li>
                    <li>✅ <strong>Gestión de garantías:</strong> Procesar cambios dentro de los 30 días de garantía</li>
                    <li>✅ <strong>Mejora del servicio:</strong> Optimizar nuestros tiempos de entrega y calidad</li>
                    <li>✅ <strong>Cumplimiento legal:</strong> Mantener registros según la legislación peruana</li>
                </ul>
                
                <h3>🚫 LO QUE NO HACEMOS con su información:</h3>
                <ul>
                    <li>❌ NO la vendemos a terceros</li>
                    <li>❌ NO la compartimos con fines comerciales</li>
                    <li>❌ NO enviamos spam o publicidad no deseada</li>
                    <li>❌ NO la usamos para perfiles comerciales externos</li>
                </ul>
            </section>

            <section class="legal-section">
                <h2>3. TikTok Pixel y Cookies</h2>
                <p>Utilizamos <strong>TikTok Pixel</strong> para:</p>
                <ul>
                    <li>📊 Mejorar nuestros anuncios en TikTok</li>
                    <li>📈 Medir la efectividad de nuestras campañas</li>
                    <li>🎯 Personalizar contenido relevante</li>
                </ul>
                <p>Esta herramienta puede recopilar información sobre su actividad en nuestro sitio web de forma anónima.</p>
            </section>

            <section class="legal-section">
                <h2>4. Compartir Información</h2>
                <p>🔒 <strong>POLÍTICA ESTRICTA DE NO COMPARTIR:</strong> Como empresa de dropshipping comprometida con la privacidad, NO vendemos, alquilamos ni compartimos su información personal.</p>
                
                <h3>🤝 Únicos casos de compartir información limitada:</h3>
                <ul>
                    <li><strong>Empresas de mensajería autorizadas:</strong> Solo nombre y dirección para efectuar la entrega</li>
                    <li><strong>Proveedores de productos:</strong> Únicamente datos necesarios para preparar su pedido</li>
                    <li><strong>Autoridades competentes:</strong> Solo cuando lo requiere la ley peruana</li>
                </ul>
                
                <h3>🔐 Protección de datos compartidos:</h3>
                <ul>
                    <li>Todos nuestros partners firman acuerdos de confidencialidad</li>
                    <li>Solo se comparten datos mínimos necesarios</li>
                    <li>Monitoreo constante del uso de información</li>
                    <li>Eliminación automática después del servicio</li>
                </ul>
                
                <p><strong>📞 Transparencia total:</strong> Puede consultarnos en cualquier momento sobre con quién hemos compartido sus datos.</p>
            </section>

            <section class="legal-section">
                <h2>5. Sus Derechos</h2>
                <p>Usted tiene derecho a:</p>
                <div class="rights-grid">
                    <div class="right-item">
                        <span class="icon">👁️</span>
                        <h4>Acceder</h4>
                        <p>Ver qué información tenemos sobre usted</p>
                    </div>
                    <div class="right-item">
                        <span class="icon">✏️</span>
                        <h4>Corregir</h4>
                        <p>Actualizar información inexacta</p>
                    </div>
                    <div class="right-item">
                        <span class="icon">🗑️</span>
                        <h4>Eliminar</h4>
                        <p>Solicitar la eliminación de sus datos</p>
                    </div>
                    <div class="right-item">
                        <span class="icon">⛔</span>
                        <h4>Oponerse</h4>
                        <p>Rechazar el procesamiento de sus datos</p>
                    </div>
                </div>
            </section>

            <section class="legal-section">
                <h2>6. Seguridad de Datos</h2>
                <p>🛡️ Como tienda de dropshipping, implementamos múltiples capas de seguridad para proteger su información:</p>
                
                <h3>🔒 Medidas Técnicas:</h3>
                <ul>
                    <li><strong>Encriptación SSL:</strong> Toda la comunicación está cifrada</li>
                    <li><strong>Almacenamiento seguro:</strong> Servidores protegidos con acceso restringido</li>
                    <li><strong>Respaldos automáticos:</strong> Copias de seguridad diarias</li>
                    <li><strong>Monitoreo 24/7:</strong> Vigilancia constante contra amenazas</li>
                </ul>
                
                <h3>👥 Medidas Humanas:</h3>
                <ul>
                    <li><strong>Acceso limitado:</strong> Solo personal autorizado maneja datos</li>
                    <li><strong>Capacitación continua:</strong> Nuestro equipo está entrenado en privacidad</li>
                    <li><strong>Protocolos estrictos:</strong> Procedimientos de seguridad documentados</li>
                    <li><strong>Auditorías regulares:</strong> Revisiones periódicas de seguridad</li>
                </ul>
                
                <h3>⚡ En caso de incidentes:</h3>
                <ul>
                    <li>Notificación inmediata a usuarios afectados</li>
                    <li>Reporte a autoridades dentro de 72 horas</li>
                    <li>Plan de contingencia activado automáticamente</li>
                    <li>Investigación completa y medidas correctivas</li>
                </ul>
            </section>

            <section class="legal-section contact-section">
                <h2>📞 Contacto para Privacidad</h2>
                <p>Si tiene preguntas sobre esta Política de Privacidad, contáctenos:</p>
                <div class="contact-info">
                    <p><strong>📧 Email:</strong> vexaimport@gmail.com</p>
                    <p><strong>📱 WhatsApp:</strong> <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank"><?php echo WHATSAPP_NUMBER; ?></a></p>
                    <p><strong>⏰ Horario:</strong> Lunes a Sábado, 6:30 AM - 11:30 PM</p>
                </div>
            </section>
        </div>
    </div>
</main>

<style>
.legal-page {
    padding: 2rem 0;
    background: #f8f9fa;
    min-height: 80vh;
}

.legal-content {
    background: white;
    padding: 3rem;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    max-width: 800px;
    margin: 0 auto;
}

.legal-content h1 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 2.5rem;
}

.last-updated {
    color: #666;
    font-style: italic;
    margin-bottom: 2rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
}

.legal-section {
    margin-bottom: 2.5rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid #eee;
}

.legal-section:last-child {
    border-bottom: none;
}

.legal-section h2 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.8rem;
}

.legal-section h3 {
    color: #667eea;
    margin: 1.5rem 0 1rem 0;
    font-size: 1.3rem;
}

.legal-section ul {
    margin: 1rem 0;
    padding-left: 1.5rem;
}

.legal-section li {
    margin-bottom: 0.5rem;
    line-height: 1.6;
}

.rights-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.right-item {
    text-align: center;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

.right-item:hover {
    transform: translateY(-5px);
}

.right-item .icon {
    font-size: 2rem;
    display: block;
    margin-bottom: 0.5rem;
}

.right-item h4 {
    color: #333;
    margin-bottom: 0.5rem;
}

.right-item p {
    color: #666;
    font-size: 0.9rem;
}

.contact-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
}

.contact-section h2 {
    color: white;
}

.contact-info p {
    margin: 0.5rem 0;
    font-size: 1.1rem;
}

.contact-info a {
    color: #feca57;
    text-decoration: none;
    font-weight: bold;
}

@media (max-width: 768px) {
    .legal-content {
        padding: 2rem 1rem;
        margin: 1rem;
    }
    
    .legal-content h1 {
        font-size: 2rem;
    }
    
    .rights-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
