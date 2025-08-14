// WhatsApp Helper Functions
class WhatsAppHelper {
    constructor() {
        this.phoneNumber = '+51955175019'; // Se puede configurar desde PHP
        this.init();
    }

    init() {
        this.setupWhatsAppButtons();
        // this.setupFloatingButton(); // Botón flotante eliminado
    }

    // Configurar botones de WhatsApp
    setupWhatsAppButtons() {
        document.querySelectorAll('.whatsapp-cta-main, .whatsapp-cta-fixed, .whatsapp-cta-final, .whatsapp-btn-custom').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                this.openWhatsApp(button.dataset.product, button.dataset.price);
            });
        });
    }

    // Configurar botón flotante (ELIMINADO)
    /*
    setupFloatingButton() {
        const floatingBtn = document.querySelector('.whatsapp-float-btn');
        if (floatingBtn) {
            floatingBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.openWhatsAppGeneral();
            });
        }
    }
    */

    // Abrir WhatsApp con mensaje de producto específico
    openWhatsApp(productName, price) {
        const message = this.generateProductMessage(productName, price);
        const url = `https://wa.me/${this.phoneNumber}?text=${encodeURIComponent(message)}`;
        
        // Track antes de abrir
        if (window.tikTokTracker) {
            window.tikTokTracker.trackWhatsAppClick(
                window.location.pathname.split('/').pop(),
                productName
            );
        }
        
        window.open(url, '_blank');
    }

    // Abrir WhatsApp con mensaje general
    openWhatsAppGeneral() {
        const message = "¡Hola! 👋 Tengo una consulta sobre sus productos. ¿Podrían ayudarme?";
        const url = `https://wa.me/${this.phoneNumber}?text=${encodeURIComponent(message)}`;
        
        // Track
        if (window.tikTokTracker) {
            window.tikTokTracker.trackCustomEvent('Contact', {
                content_type: 'whatsapp_general',
                content_name: 'General inquiry'
            });
        }
        
        window.open(url, '_blank');
    }

    // Generar mensaje para producto específico
    generateProductMessage(productName, price) {
        const currentUrl = window.location.href;
        return `¡Hola! 👋

Me interesa el producto: *${productName}*
Precio: ${price}

¿Podrían darme más información sobre:
• Disponibilidad
• Tiempos de entrega
• Métodos de pago

Link del producto: ${currentUrl}

¡Gracias! 😊`;
    }

    // Actualizar número de teléfono dinámicamente
    updatePhoneNumber(newNumber) {
        this.phoneNumber = newNumber;
    }

    // Generar URL de WhatsApp
    generateWhatsAppURL(message) {
        return `https://wa.me/${this.phoneNumber}?text=${encodeURIComponent(message)}`;
    }
}

// Funciones de utilidad para urgencia y conversión
class ConversionHelpers {
    constructor() {
        this.init();
    }

    init() {
        this.addUrgencyElements();
        this.setupScrollEffects();
        this.setupExitIntent();
    }

    // Agregar elementos de urgencia
    addUrgencyElements() {
        // Stock counter animado
        const stockIndicators = document.querySelectorAll('.stock-indicator');
        stockIndicators.forEach(indicator => {
            this.animateStockCounter(indicator);
        });

        // Timer de oferta (si existe)
        this.setupOfferTimer();
    }

    // Animar contador de stock
    animateStockCounter(element) {
        const startValue = 50;
        const endValue = Math.floor(Math.random() * 10) + 5; // Entre 5 y 15
        const duration = 3000;
        
        let current = startValue;
        const increment = (endValue - startValue) / (duration / 50);
        
        const timer = setInterval(() => {
            current += increment;
            if (current <= endValue) {
                element.textContent = `¡Solo quedan ${Math.floor(current)} unidades!`;
                clearInterval(timer);
            } else {
                element.textContent = `¡Solo quedan ${Math.floor(current)} unidades!`;
            }
        }, 50);
    }

    // Timer de oferta
    setupOfferTimer() {
        const timerElement = document.querySelector('.offer-timer');
        if (!timerElement) return;

        // Configurar timer para 24 horas desde ahora
        const endTime = new Date().getTime() + (24 * 60 * 60 * 1000);
        
        const timer = setInterval(() => {
            const now = new Date().getTime();
            const distance = endTime - now;

            if (distance < 0) {
                clearInterval(timer);
                timerElement.innerHTML = "¡Oferta terminada!";
                return;
            }

            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            timerElement.innerHTML = `⏰ Oferta termina en: ${hours}h ${minutes}m ${seconds}s`;
        }, 1000);
    }

    // Efectos de scroll para aumentar conversión
    setupScrollEffects() {
        window.addEventListener('scroll', () => {
            const scrollPercent = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
            
            // Mostrar CTA fijo después del 20% de scroll
            const fixedCTA = document.querySelector('.fixed-cta-bottom');
            if (fixedCTA) {
                if (scrollPercent > 20) {
                    fixedCTA.style.transform = 'translateY(0)';
                } else {
                    fixedCTA.style.transform = 'translateY(100%)';
                }
            }
        });
    }

    // Exit intent detection
    setupExitIntent() {
        let hasShownExitIntent = false;
        
        document.addEventListener('mouseleave', (e) => {
            if (e.clientY <= 0 && !hasShownExitIntent) {
                hasShownExitIntent = true;
                this.showExitIntentModal();
            }
        });
    }

    // Modal de exit intent
    showExitIntentModal() {
        const modal = document.createElement('div');
        modal.className = 'exit-intent-modal';
        modal.innerHTML = `
            <div class="modal-content">
                <div class="modal-header">
                    <h2>¡Espera! 🛑</h2>
                    <button class="close-modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>¿Te vas sin tu producto viral? 😢</p>
                    <p><strong>¡Consigue un 10% de descuento extra!</strong></p>
                    <p>Escríbenos por WhatsApp y menciona el código: <strong>EXTRA10</strong></p>
                </div>
                <div class="modal-footer">
                    <button class="whatsapp-modal-btn">📱 Contactar por WhatsApp</button>
                </div>
            </div>
        `;

        // Estilos del modal
        const style = document.createElement('style');
        style.textContent = `
            .exit-intent-modal {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.8);
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 10000;
                animation: fadeIn 0.3s ease;
            }
            .modal-content {
                background: white;
                padding: 2rem;
                border-radius: 20px;
                max-width: 400px;
                text-align: center;
                animation: slideInUp 0.3s ease;
            }
            .modal-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 1rem;
            }
            .close-modal {
                background: none;
                border: none;
                font-size: 2rem;
                cursor: pointer;
            }
            .whatsapp-modal-btn {
                background: #25D366;
                color: white;
                border: none;
                padding: 1rem 2rem;
                border-radius: 25px;
                font-weight: bold;
                cursor: pointer;
                margin-top: 1rem;
            }
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }
            @keyframes slideInUp {
                from { transform: translateY(30px); opacity: 0; }
                to { transform: translateY(0); opacity: 1; }
            }
        `;

        document.head.appendChild(style);
        document.body.appendChild(modal);

        // Event listeners
        modal.querySelector('.close-modal').addEventListener('click', () => {
            modal.remove();
        });

        modal.querySelector('.whatsapp-modal-btn').addEventListener('click', () => {
            window.whatsAppHelper.openWhatsAppGeneral();
            modal.remove();
        });

        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.remove();
            }
        });
    }
}

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    window.whatsAppHelper = new WhatsAppHelper();
    window.conversionHelpers = new ConversionHelpers();
});

// Funciones globales
window.openWhatsApp = function(productName, price) {
    if (window.whatsAppHelper) {
        window.whatsAppHelper.openWhatsApp(productName, price);
    }
};
