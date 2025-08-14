<?php
require_once '../config.php';

$meta_title = 'Términos y Condiciones - ' . SITE_NAME;
$meta_description = 'Conoce los términos y condiciones de uso de ' . SITE_NAME;
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
            <h1>📄 Términos y Condiciones</h1>
            <p class="last-updated"><strong>Última actualización: 12 de agosto de 2025</strong></p>

            <section class="legal-section">
                <h2>1. Aceptación de los Términos</h2>
                <p>Al utilizar nuestro sitio web y servicios de <?php echo SITE_NAME; ?>, usted acepta automáticamente estos términos y condiciones. Si no está de acuerdo, por favor no utilice nuestros servicios.</p>
                
                <h3>🏪 Sobre nuestro modelo de negocio:</h3>
                <p><?php echo SITE_NAME; ?> opera como una <strong>tienda de dropshipping</strong>, lo que significa que:</p>
                <ul>
                    <li>✅ Conectamos clientes con productos de calidad verificada</li>
                    <li>✅ Los productos se envían directamente desde nuestros proveedores autorizados</li>
                    <li>✅ Garantizamos la calidad y autenticidad de cada producto</li>
                    <li>✅ Asumimos total responsabilidad por la experiencia del cliente</li>
                </ul>
            </section>

            <section class="legal-section">
                <h2>2. Nuestros Productos y Calidad</h2>
                <p>🛍️ Como tienda de dropshipping especializada en productos trending de TikTok:</p>
                
                <h3>🔍 Proceso de Selección:</h3>
                <ul>
                    <li>✅ <strong>Productos curados:</strong> Cada producto es evaluado antes de ser listado</li>
                    <li>✅ <strong>Proveedores verificados:</strong> Trabajamos solo con suppliers confiables</li>
                    <li>✅ <strong>Control de calidad:</strong> Todos los productos son testeados antes del envío</li>
                    <li>✅ <strong>Descripciones precisas:</strong> Información detallada y real del producto</li>
                    <li>✅ <strong>Imágenes auténticas:</strong> Fotos reales, no renders o imágenes falsas</li>
                </ul>
                
                <h3>📦 Garantía de Calidad:</h3>
                <ul>
                    <li>🔬 <strong>Testing previo:</strong> Cada producto es probado antes del envío</li>
                    <li>📋 <strong>Inspección visual:</strong> Verificación de condición y funcionamiento</li>
                    <li>📏 <strong>Medidas exactas:</strong> Confirmación de dimensiones y especificaciones</li>
                    <li>⚠️ <strong>Variaciones menores:</strong> Los colores pueden variar ligeramente según la pantalla</li>
                </ul>
            </section>

            <section class="legal-section">
                <h2>3. Proceso de Compra y Pagos</h2>
                <div class="pricing-info">
                    <div class="price-item">
                        <h4>� Proceso de Compra via WhatsApp</h4>
                        <ol>
                            <li><strong>Clic en botón:</strong> Al hacer clic en "Pedir por WhatsApp" es redirigido automáticamente</li>
                            <li><strong>Consulta inicial:</strong> Mensaje predefinido se envía con el producto de interés</li>
                            <li><strong>Confirmación de pedido:</strong> Nuestro equipo confirma disponibilidad y precio</li>
                            <li><strong>Datos de envío:</strong> Solicitamos nombre completo, dirección y teléfono</li>
                            <li><strong>Confirmación final:</strong> Revisamos todos los datos antes del envío</li>
                        </ol>
                    </div>
                    <div class="price-item">
                        <h4>� Precios y Forma de Pago</h4>
                        <ul>
                            <li><strong>Moneda:</strong> Precios en soles peruanos (S/)</li>
                            <li><strong>Pago contraentrega:</strong> 100% seguro para el cliente</li>
                            <li><strong>Sin pagos adelantados:</strong> Paga solo cuando recibe el producto</li>
                            <li><strong>Verificación de producto:</strong> Puede inspeccionar antes de pagar</li>
                            <li><strong>Cambio exacto:</strong> Recomendamos tener el monto exacto</li>
                            <li><strong>Comprobante:</strong> Recibo de venta incluido en cada entrega</li>
                        </ul>
                    </div>
                </div>
                
                <h3>⚠️ Importante sobre precios:</h3>
                <ul>
                    <li>Los precios incluyen todos los impuestos aplicables</li>
                    <li>Pueden cambiar sin previo aviso debido a fluctuaciones del mercado</li>
                    <li>El precio final es el confirmado por WhatsApp al momento del pedido</li>
                    <li>Ofertas y promociones tienen tiempo limitado de validez</li>
                </ul>
            </section>

            <section class="legal-section">
                <h2>4. Envíos y Entregas</h2>
                <div class="shipping-grid">
                    <div class="shipping-item">
                        <span class="icon">🚚</span>
                        <h4>Envío Gratis</h4>
                        <p>En todos los pedidos sin excepción</p>
                    </div>
                    <div class="shipping-item">
                        <span class="icon">⚡</span>
                        <h4>Entrega Rápida</h4>
                        <p>24-48 horas en área metropolitana</p>
                    </div>
                    <div class="shipping-item">
                        <span class="icon">📦</span>
                        <h4>Empaque Seguro</h4>
                        <p>Productos protegidos y bien embalados</p>
                    </div>
                    <div class="shipping-item">
                        <span class="icon">📍</span>
                        <h4>Tracking</h4>
                        <p>Seguimiento vía WhatsApp</p>
                    </div>
                </div>
                <p><strong>⚠️ Importante:</strong> Los tiempos de entrega son estimados y pueden variar por factores externos como clima, tráfico o disponibilidad del repartidor.</p>
            </section>

            <section class="legal-section">
                <h2>5. Política de Devoluciones</h2>
                <p>🔄 Ofrecemos <strong>30 días de garantía</strong> total. Ver detalles completos en nuestra <a href="devoluciones.php">Política de Devolución</a>.</p>
                
                <div class="return-summary">
                    <div class="return-item">
                        <span class="icon">✅</span>
                        <p><strong>SÍ aceptamos:</strong> Productos sin usar, en empaque original</p>
                    </div>
                    <div class="return-item">
                        <span class="icon">❌</span>
                        <p><strong>NO aceptamos:</strong> Productos usados o dañados por mal uso</p>
                    </div>
                </div>
            </section>

            <section class="legal-section">
                <h2>6. Limitación de Responsabilidad</h2>
                <p>⚖️ <?php echo SITE_NAME; ?> no será responsable por:</p>
                <ul>
                    <li>Daños indirectos o consecuentes</li>
                    <li>Pérdida de ganancias o datos</li>
                    <li>Retrasos por causas de fuerza mayor</li>
                    <li>Mal uso del producto por parte del cliente</li>
                </ul>
                <p><strong>Nuestra responsabilidad máxima será el valor pagado por el producto.</strong></p>
            </section>

            <section class="legal-section">
                <h2>7. Propiedad Intelectual</h2>
                <p>🔒 Todo el contenido de este sitio web es propiedad de <?php echo SITE_NAME; ?>:</p>
                <ul>
                    <li>Textos y descripciones</li>
                    <li>Diseño y estructura</li>
                    <li>Logotipos y marca</li>
                    <li>Fotografías de productos</li>
                </ul>
                <p>Está prohibida la reproducción sin autorización escrita.</p>
            </section>

            <section class="legal-section">
                <h2>8. Uso de WhatsApp y Datos del Cliente</h2>
                <p>📱 WhatsApp es nuestro canal principal de ventas y atención al cliente:</p>
                
                <h3>🔄 Proceso de Venta via WhatsApp:</h3>
                <ul>
                    <li>✅ <strong>Redirección automática:</strong> Los botones lo llevan directamente a WhatsApp</li>
                    <li>✅ <strong>Atención personalizada:</strong> Un representante confirma su pedido</li>
                    <li>✅ <strong>Datos requeridos:</strong> Solo nombre, dirección y teléfono para envío</li>
                    <li>✅ <strong>Confirmación de pedido:</strong> Verificamos todos los datos antes del envío</li>
                    <li>✅ <strong>Seguimiento de entrega:</strong> Updates del estado de su pedido</li>
                </ul>
                
                <h3>🔒 Protección de Datos en WhatsApp:</h3>
                <ul>
                    <li><strong>Uso exclusivo para ventas:</strong> Sus datos solo sirven para completar su pedido</li>
                    <li><strong>No compartimos información:</strong> Sus datos permanecen confidenciales</li>
                    <li><strong>Eliminación automática:</strong> Datos se eliminan después de 90 días de completada la venta</li>
                    <li><strong>Opt-out disponible:</strong> Puede solicitar no recibir más mensajes</li>
                </ul>
                
                <h3>📞 Comunicaciones Permitidas:</h3>
                <ul>
                    <li>✅ Confirmación de pedidos y consultas sobre productos</li>
                    <li>✅ Coordinación de entregas y actualizaciones de envío</li>
                    <li>✅ Soporte técnico y manejo de garantías</li>
                    <li>✅ Promociones (solo si acepta recibirlas)</li>
                </ul>
                
                <p><strong>Al escribirnos por WhatsApp, acepta recibir comunicaciones relacionadas con su pedido. Puede darse de baja en cualquier momento.</strong></p>
            </section>

            <section class="legal-section">
                <h2>9. Responsabilidad del Dropshipping</h2>
                <p>🏪 <strong>Transparencia total:</strong> <?php echo SITE_NAME; ?> opera bajo el modelo de dropshipping y asume completa responsabilidad por:</p>
                
                <h3>✅ Nuestras Responsabilidades:</h3>
                <ul>
                    <li><strong>Selección de productos:</strong> Curación cuidadosa de artículos de calidad</li>
                    <li><strong>Control de proveedores:</strong> Verificación constante de nuestros suppliers</li>
                    <li><strong>Testing de productos:</strong> Cada artículo es probado antes del envío</li>
                    <li><strong>Cumplimiento de garantías:</strong> 30 días reales de satisfacción garantizada</li>
                    <li><strong>Atención al cliente:</strong> Soporte directo y personalizado</li>
                    <li><strong>Gestión de devoluciones:</strong> Proceso simple y sin costos adicionales</li>
                    <li><strong>Tiempos de entrega:</strong> Coordinación eficiente con mensajería</li>
                </ul>
                
                <h3>🤝 Compromiso con la Calidad:</h3>
                <ul>
                    <li><strong>Productos auténticos:</strong> Solo vendemos artículos originales y funcionales</li>
                    <li><strong>Descripciones precisas:</strong> Información 100% veraz sobre cada producto</li>
                    <li><strong>Precios transparentes:</strong> Sin costos ocultos ni sorpresas</li>
                    <li><strong>Comunicación clara:</strong> Updates constantes sobre el estado de su pedido</li>
                </ul>
                
                <h3>📊 Mejora Continua:</h3>
                <ul>
                    <li>Monitoreo constante de la satisfacción del cliente</li>
                    <li>Evaluación regular de proveedores y productos</li>
                    <li>Optimización de procesos de entrega y atención</li>
                    <li>Actualización de políticas basada en feedback de clientes</li>
                </ul>
            </section>

            <section class="legal-section">
                <h2>10. Modificaciones</h2>
                <p>📝 Nos reservamos el derecho de modificar estos términos en cualquier momento. Los cambios entrarán en vigor inmediatamente después de su publicación en el sitio web.</p>
                <p><strong>Es su responsabilidad revisar periódicamente estos términos.</strong></p>
            </section>

            <section class="legal-section contact-section">
                <h2>📞 ¿Preguntas sobre estos Términos?</h2>
                <p>Estamos aquí para ayudarte. Contáctanos:</p>
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
.pricing-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 1.5rem 0;
}

.price-item {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 10px;
    border-left: 4px solid #667eea;
}

.price-item h4 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.shipping-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.shipping-item {
    text-align: center;
    padding: 1.5rem;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 15px;
    transition: transform 0.3s ease;
}

.shipping-item:hover {
    transform: translateY(-5px);
}

.shipping-item .icon {
    font-size: 2.5rem;
    display: block;
    margin-bottom: 1rem;
}

.shipping-item h4 {
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}

.shipping-item p {
    font-size: 0.9rem;
    opacity: 0.9;
}

.return-summary {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin: 1.5rem 0;
}

.return-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
}

.return-item .icon {
    font-size: 1.5rem;
    min-width: 30px;
}

.return-item p {
    margin: 0;
}

@media (max-width: 768px) {
    .pricing-info,
    .shipping-grid {
        grid-template-columns: 1fr;
    }
    
    .return-summary {
        grid-template-columns: 1fr;
    }
    
    .return-item {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
