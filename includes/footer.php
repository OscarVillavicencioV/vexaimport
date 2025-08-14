    <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>📞 Atención al Cliente</h3>
                    <div class="contact-info">
                        <p>📧 Email: vexaimport@gmail.com</p>
                        <p>📱 WhatsApp: <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank">+<?php echo WHATSAPP_NUMBER; ?></a></p>
                        <p>⏰ Horario: Lunes a Sábado 6:30am - 11:30pm</p>
                        <p>⚡ Respuesta: en menos de 1h</p>
                    </div>
                </div>
                
                <div class="footer-section">
                    <h3>📋 Información Legal</h3>
                    <ul class="legal-links">
                        <li><a href="<?php echo isset($legal_path) ? $legal_path : 'legal/'; ?>privacidad.php">🔒 Política de Privacidad</a></li>
                        <li><a href="<?php echo isset($legal_path) ? $legal_path : 'legal/'; ?>terminos.php">📄 Términos y Condiciones</a></li>
                        <li><a href="<?php echo isset($legal_path) ? $legal_path : 'legal/'; ?>devoluciones.php">🔄 Política de Devolución</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>🚚 Envíos y Garantías</h3>
                    <div class="guarantees">
                        <div class="guarantee-item">
                            <span class="icon">🚚</span>
                            <span>Envío gratis en 24-48h</span>
                        </div>
                        <div class="guarantee-item">
                            <span class="icon">🔄</span>
                            <span>30 días de garantía</span>
                        </div>
                        <div class="guarantee-item">
                            <span class="icon">🔒</span>
                            <span>Pago 100% contra entrega</span>
                        </div>
                        <div class="guarantee-item">
                            <span class="icon">💯</span>
                            <span>Satisfacción garantizada</span>
                        </div>
                    </div>
                </div>
                
                <!-- Sección Síguenos OCULTA -->
                <!--
                <div class="footer-section">
                    <h3>🌟 Síguenos</h3>
                    <div class="social-links">
                        <a href="#" target="_blank" class="social-link tiktok">📱 TikTok</a>
                        <a href="#" target="_blank" class="social-link instagram">📸 Instagram</a>
                        <a href="#" target="_blank" class="social-link facebook">👥 Facebook</a>
                        <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" class="social-link whatsapp">💬 WhatsApp</a>
                    </div>
                </div>
                -->
            </div>
            
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; 2025 <?php echo SITE_NAME; ?>. Todos los derechos reservados.</p>
                    <p>Productos trending directamente desde TikTok 🔥</p>
                </div>
                <div class="trust-badges">
                    <span class="trust-badge">🔒 SSL Seguro</span>
                    <span class="trust-badge">💳 Pago Seguro</span>
                    <span class="trust-badge">🚚 Envío Rápido</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="<?php echo isset($js_path) ? $js_path : '../assets/js/'; ?>tiktok-pixel.js"></script>
    <script src="<?php echo isset($js_path) ? $js_path : '../assets/js/'; ?>whatsapp.js"></script>
    
    <script>
    // Tracking básico de navegación
    document.addEventListener('DOMContentLoaded', function() {
        // Track footer link clicks
        document.querySelectorAll('.legal-links a').forEach(link => {
            link.addEventListener('click', function() {
                ttq.track('ClickButton', {
                    content_type: 'legal',
                    content_name: this.textContent.trim()
                });
            });
        });
        
        // Track social media clicks
        document.querySelectorAll('.social-links a').forEach(link => {
            link.addEventListener('click', function() {
                ttq.track('Contact', {
                    content_type: 'social',
                    content_name: this.textContent.trim()
                });
            });
        });
    });
    </script>
</body>
</html>
