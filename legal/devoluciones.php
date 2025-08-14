<?php
require_once '../config.php';

$meta_title = 'Política de Devolución - ' . SITE_NAME;
$meta_description = 'Conoce nuestra garantía de 30 días y política de devoluciones. Satisfacción 100% garantizada.';
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
            <h1>🔄 Política de Devolución</h1>
            <p class="last-updated"><strong>Última actualización: 12 de agosto de 2025</strong></p>

            <div class="guarantee-banner">
                <h2>💯 Garantía de Satisfacción de 30 Días</h2>
                <p>En <?php echo SITE_NAME; ?>, como tienda de dropshipping comprometida con la excelencia, tu satisfacción es nuestra prioridad. Si no estás 100% satisfecho, te devolvemos tu dinero o enviamos un reemplazo sin costo adicional.</p>
                
                <h3>🔬 Compromiso de Calidad:</h3>
                <p>Todos nuestros productos son <strong>testeados antes del envío</strong> para garantizar que lleguen en perfectas condiciones a tu hogar.</p>
            </div>

            <section class="legal-section">
                <h2>📋 Condiciones para Devoluciones</h2>
                
                <div class="conditions-grid">
                    <div class="condition-card eligible">
                        <h3>✅ Productos Elegibles para Devolución</h3>
                        <ul>
                            <li><strong>Productos defectuosos:</strong> Que no funcionen según lo descrito</li>
                            <li><strong>Productos dañados:</strong> Que lleguen con daños físicos</li>
                            <li><strong>Producto incorrecto:</strong> Si recibiste algo diferente a lo pedido</li>
                            <li><strong>No cumple expectativas:</strong> Si el producto no es como se describió</li>
                            <li><strong>Problemas de calidad:</strong> Materiales deficientes o acabados pobres</li>
                            <li><strong>Dentro de 30 días:</strong> Desde la fecha de entrega confirmada</li>
                            <li><strong>Con embalaje original:</strong> En su caja o empaque inicial</li>
                            <li><strong>Accesorios completos:</strong> Todos los componentes incluidos</li>
                        </ul>
                    </div>

                    <div class="condition-card not-eligible">
                        <h3>❌ Productos NO Elegibles</h3>
                        <ul>
                            <li><strong>Daño por mal uso:</strong> Productos dañados por uso inadecuado</li>
                            <li><strong>Desgaste normal:</strong> Deterioro por uso prolongado y normal</li>
                            <li><strong>Modificaciones:</strong> Productos alterados o reparados por el cliente</li>
                            <li><strong>Más de 30 días:</strong> Solicitudes fuera del período de garantía</li>
                            <li><strong>Sin embalaje:</strong> Productos sin caja original o muy dañado</li>
                            <li><strong>Productos personalizados:</strong> Artículos hechos especialmente para el cliente</li>
                            <li><strong>Razones subjetivas:</strong> "Ya no me gusta" o "cambié de opinión"</li>
                        </ul>
                    </div>
                </div>
                            <li>Productos dañados por mal uso</li>
                            <li>Productos devueltos después de 30 días</li>
                            <li>Productos sin empaque original</li>
                            <li>Productos con signos de uso excesivo</li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="legal-section">
                <h2>📝 Cómo Iniciar una Devolución</h2>
                
                <div class="process-steps">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>📱 Contáctanos por WhatsApp</h4>
                            <p>Escríbenos a <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank"><?php echo WHATSAPP_NUMBER; ?></a> con:</p>
                            <ul>
                                <li><strong>Número de pedido:</strong> El que recibiste al confirmar tu compra</li>
                                <li><strong>Motivo de la devolución:</strong> Describe el problema específico</li>
                                <li><strong>Fotos del producto:</strong> Si está dañado o defectuoso</li>
                                <li><strong>Fecha de entrega:</strong> Para verificar el período de garantía</li>
                            </ul>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>✅ Evaluación y Aprobación</h4>
                            <p>Nuestro equipo especializado revisará tu solicitud. Como empresa de dropshipping responsable, evaluamos cada caso individualmente.</p>
                            <ul>
                                <li><strong>Respuesta rápida:</strong> En menos de 24 horas</li>
                                <li><strong>Evaluación justa:</strong> Revisión objetiva del caso</li>
                                <li><strong>Opciones flexibles:</strong> Reemplazo o reembolso según tu preferencia</li>
                            </ul>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>📦 Recolección Sin Costo</h4>
                            <p>Si la devolución es aprobada, organizamos la recolección:</p>
                            <ul>
                                <li><strong>Recolección gratuita:</strong> Sin costo adicional para ti</li>
                                <li><strong>Empaque seguro:</strong> En la caja original si la tienes</li>
                                <li><strong>Coordinación flexible:</strong> En el horario que te convenga</li>
                                <li><strong>Comprobante de recolección:</strong> Recibo de que se llevó el producto</li>
                            </ul>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>🔄 Reemplazo o Reembolso</h4>
                            <p>Una vez que recibimos el producto:</p>
                            <ul>
                                <li><strong>Inspección rápida:</strong> Verificamos el estado del producto</li>
                                <li><strong>Reemplazo prioritario:</strong> Envío de nuevo producto en 24-48h</li>
                                <li><strong>Reembolso completo:</strong> Si prefieres la devolución del dinero</li>
                                <li><strong>Sin costos ocultos:</strong> Todo el proceso es gratuito para ti</li>
                            </ul>
                        </div>
                    </div>
                            <h4>💰 Reembolso</h4>
                            <p>Una vez recibido y verificado el producto, procesaremos tu reembolso en 3-5 días hábiles.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="legal-section">
                <h2>💰 Reembolsos</h2>
                
                <div class="refund-info">
                    <div class="refund-card">
                        <h4>⏰ Tiempo de Procesamiento</h4>
                        <ul>
                            <li><strong>Recepción:</strong> 1-2 días hábiles</li>
                            <li><strong>Verificación:</strong> 1-2 días hábiles</li>
                            <li><strong>Reembolso:</strong> 3-5 días hábiles</li>
                            <li><strong>Total:</strong> 5-9 días hábiles</li>
                        </ul>
                    </div>

                    <div class="refund-card">
                        <h4>💳 Métodos de Reembolso</h4>
                        <ul>
                            <li>Transferencia bancaria</li>
                            <li>Pago móvil</li>
                            <li>Efectivo (en casos especiales)</li>
                            <li>Crédito para futura compra</li>
                        </ul>
                    </div>

                    <div class="refund-card">
                        <h4>🚚 Costos de Envío</h4>
                        <ul>
                            <li><strong>✅ Producto defectuoso:</strong> Recolección gratuita</li>
                            <li><strong>✅ Error nuestro:</strong> Recolección gratuita</li>
                            <li><strong>✅ Cambio de opinión:</strong> Recolección gratuita</li>
                            <li><strong>💡 Siempre gratis para ti</strong></li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="legal-section">
                <h2>🔄 Intercambios</h2>
                <p>Actualmente no manejamos intercambios directos. Para cambiar un producto:</p>
                
                <div class="exchange-process">
                    <div class="exchange-step">
                        <span class="icon">1️⃣</span>
                        <p>Devuelve el producto original siguiendo el proceso normal</p>
                    </div>
                    <div class="exchange-step">
                        <span class="icon">2️⃣</span>
                        <p>Realiza un nuevo pedido del producto que deseas</p>
                    </div>
                    <div class="exchange-step">
                        <span class="icon">3️⃣</span>
                        <p>Una vez procesada la devolución, recibirás tu reembolso</p>
                    </div>
                </div>
            </section>

            <section class="legal-section">
                <h2>📦 Productos Dañados o Defectuosos</h2>
                
                <div class="damage-policy">
                    <h4>🚨 Protocolo para Productos Dañados:</h4>
                    <p><strong>Como tienda de dropshipping,</strong> todos nuestros productos son testeados antes del envío. Si aún así recibes un producto con problemas:</p>
                    <ol>
                        <li><strong>📱 Contáctanos inmediatamente</strong> por WhatsApp al momento de recibir</li>
                        <li><strong>📸 Envía fotos detalladas</strong> del daño o defecto desde múltiples ángulos</li>
                        <li><strong>🚫 No uses el producto</strong> dañado para evitar más deterioros</li>
                        <li><strong>📦 Conserva el empaque original</strong> como evidencia del estado de llegada</li>
                        <li><strong>⚡ Recibe solución inmediata:</strong> Reemplazo gratuito o reembolso completo</li>
                    </ol>
                    
                    <div class="damage-guarantee">
                        <h4>💯 Nuestra Garantía de Dropshipping Responsable:</h4>
                        <ul>
                            <li>✅ <strong>Reemplazo gratuito inmediato:</strong> Nuevo producto enviado en 24-48h</li>
                            <li>✅ <strong>Sin costo de devolución:</strong> No necesitas pagar recolección</li>
                            <li>✅ <strong>Envío prioritario:</strong> El reemplazo tiene máxima prioridad</li>
                            <li>✅ <strong>Verificación adicional:</strong> Doble control de calidad en el reemplazo</li>
                            <li>✅ <strong>Compensación:</strong> Descuento en próxima compra por los inconvenientes</li>
                            <li>✅ <strong>Garantía extendida:</strong> +15 días adicionales en el producto reemplazado</li>
                        </ul>
                    </div>
                    
                    <p><strong>🔬 Compromiso de Calidad:</strong> Investigamos cada caso de producto defectuoso para mejorar nuestro proceso de selección y testing de proveedores.</p>
                </div>
            </section>

            <section class="legal-section contact-section">
                <h2>📞 Centro de Devoluciones</h2>
                <p>¿Necesitas devolver un producto? ¡Estamos aquí para ayudarte!</p>
                
                <div class="contact-grid">
                    <div class="contact-method">
                        <span class="icon">📱</span>
                        <h4>WhatsApp</h4>
                        <p><a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank"><?php echo WHATSAPP_NUMBER; ?></a></p>
                        <small>Respuesta inmediata</small>
                    </div>
                    
                    <div class="contact-method">
                        <span class="icon">📧</span>
                        <h4>Email</h4>
                        <p>vexaimport@gmail.com</p>
                        <small>Respuesta en 24h</small>
                    </div>
                    
                    <div class="contact-method">
                        <span class="icon">⏰</span>
                        <h4>Horario</h4>
                        <p>Lunes a Sábado</p>
                        <small>6:30 AM - 11:30 PM</small>
                    </div>
                </div>
            </section>

            <div class="satisfaction-banner">
                <h2>🎯 Compromiso de Dropshipping Responsable</h2>
                <p>En <?php echo SITE_NAME; ?>, operamos bajo el modelo de dropshipping con los más altos estándares de calidad. Tu satisfacción es nuestra prioridad número uno.</p>
                
                <h3>🏪 ¿Por qué elegir nuestro dropshipping?</h3>
                <ul style="text-align: left; max-width: 600px; margin: 1rem auto;">
                    <li>✅ <strong>Productos pre-testeados:</strong> Cada artículo pasa control de calidad</li>
                    <li>✅ <strong>Proveedores verificados:</strong> Solo trabajamos con suppliers confiables</li>
                    <li>✅ <strong>Garantía real de 30 días:</strong> No letra pequeña, cumplimos lo prometido</li>
                    <li>✅ <strong>Atención personalizada:</strong> Soporte directo via WhatsApp</li>
                    <li>✅ <strong>Envíos sin costo:</strong> Tanto entrega como recolecciones gratuitas</li>
                </ul>
                
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hola! Necesito ayuda con una devolución" target="_blank" class="cta-button">
                    💬 Contactar Soporte Especializado
                </a>
            </div>
        </div>
    </div>
</main>

<style>
.guarantee-banner {
    background: linear-gradient(135deg, #2ed573 0%, #17a2b8 100%);
    color: white;
    padding: 2rem;
    border-radius: 15px;
    text-align: center;
    margin-bottom: 2rem;
}

.guarantee-banner h2 {
    color: white;
    margin-bottom: 1rem;
}

.conditions-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.condition-card {
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.condition-card.eligible {
    background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
    border-left: 5px solid #28a745;
}

.condition-card.not-eligible {
    background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
    border-left: 5px solid #dc3545;
}

.condition-card h3 {
    margin-bottom: 1rem;
    font-size: 1.3rem;
}

.condition-card ul {
    list-style: none;
    padding: 0;
}

.condition-card li {
    padding: 0.5rem 0;
    border-bottom: 1px solid rgba(0,0,0,0.1);
}

.condition-card li:last-child {
    border-bottom: none;
}

.process-steps {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    margin: 2rem 0;
}

.step {
    display: flex;
    align-items: flex-start;
    gap: 2rem;
    padding: 2rem;
    background: #f8f9fa;
    border-radius: 15px;
    border-left: 5px solid #667eea;
}

.step-number {
    background: #667eea;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.5rem;
    flex-shrink: 0;
}

.step-content h4 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.refund-info {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.refund-card {
    background: white;
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-top: 5px solid #667eea;
}

.refund-card h4 {
    color: #333;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.exchange-process {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.exchange-step {
    text-align: center;
    padding: 1.5rem;
    background: #f8f9fa;
    border-radius: 15px;
    transition: transform 0.3s ease;
}

.exchange-step:hover {
    transform: translateY(-5px);
}

.exchange-step .icon {
    font-size: 2rem;
    display: block;
    margin-bottom: 1rem;
}

.damage-policy {
    background: #fff3cd;
    padding: 2rem;
    border-radius: 15px;
    border-left: 5px solid #ffc107;
    margin: 2rem 0;
}

.damage-guarantee {
    background: white;
    padding: 1.5rem;
    border-radius: 10px;
    margin-top: 1.5rem;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}

.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.contact-method {
    text-align: center;
    padding: 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.contact-method:hover {
    transform: translateY(-5px);
}

.contact-method .icon {
    font-size: 2.5rem;
    display: block;
    margin-bottom: 1rem;
}

.contact-method h4 {
    color: #333;
    margin-bottom: 0.5rem;
}

.contact-method p {
    font-weight: bold;
    color: #667eea;
    margin-bottom: 0.5rem;
}

.contact-method small {
    color: #666;
    font-style: italic;
}

.satisfaction-banner {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 3rem 2rem;
    border-radius: 20px;
    text-align: center;
    margin-top: 3rem;
}

.satisfaction-banner h2 {
    color: white;
    margin-bottom: 1rem;
}

.satisfaction-banner .cta-button {
    background: #25D366;
    color: white;
    padding: 1rem 2rem;
    text-decoration: none;
    border-radius: 25px;
    font-weight: bold;
    display: inline-block;
    margin-top: 1rem;
    transition: all 0.3s ease;
}

.satisfaction-banner .cta-button:hover {
    background: #20b956;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .conditions-grid,
    .refund-info,
    .exchange-process,
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .step {
        flex-direction: column;
        text-align: center;
    }
    
    .process-steps {
        gap: 1rem;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
