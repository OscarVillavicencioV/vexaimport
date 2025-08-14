// TikTok Pixel Helper Functions
class TikTokPixelTracker {
    constructor() {
        this.init();
    }

    init() {
        this.setupPageTracking();
        this.setupScrollTracking();
        this.setupTimeTracking();
    }

    // Track page views automáticamente
    setupPageTracking() {
        // Ya se hace en el header, pero podemos agregar eventos adicionales
        document.addEventListener('DOMContentLoaded', () => {
            this.trackPageView();
        });
    }

    // Track scroll depth
    setupScrollTracking() {
        let scrollTracked = {
            25: false,
            50: false,
            75: false,
            100: false
        };

        window.addEventListener('scroll', () => {
            const scrollPercent = Math.round(
                (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100
            );

            Object.keys(scrollTracked).forEach(percent => {
                if (scrollPercent >= percent && !scrollTracked[percent]) {
                    scrollTracked[percent] = true;
                    this.trackScroll(percent);
                }
            });
        });
    }

    // Track time on page
    setupTimeTracking() {
        const timeIntervals = [30, 60, 120, 300]; // segundos
        
        timeIntervals.forEach(seconds => {
            setTimeout(() => {
                this.trackTimeOnPage(seconds);
            }, seconds * 1000);
        });
    }

    // Métodos de tracking específicos
    trackPageView() {
        if (typeof ttq !== 'undefined') {
            ttq.track('ViewContent', {
                content_type: 'page',
                content_name: document.title
            });
        }
    }

    trackScroll(percent) {
        if (typeof ttq !== 'undefined') {
            ttq.track('ClickButton', {
                content_type: 'scroll',
                content_name: `Scroll ${percent}%`
            });
        }
    }

    trackTimeOnPage(seconds) {
        if (typeof ttq !== 'undefined') {
            ttq.track('ClickButton', {
                content_type: 'engagement',
                content_name: `Time on page ${seconds}s`
            });
        }
    }

    // Tracking de productos específicos
    trackProductView(productId, productName, price) {
        if (typeof ttq !== 'undefined') {
            ttq.track('ViewContent', {
                content_type: 'product',
                content_id: productId,
                content_name: productName,
                value: parseFloat(price.replace(/[^0-9.]/g, '')),
                currency: 'USD'
            });
        }
    }

    trackAddToCart(productId, productName, price, quantity = 1) {
        if (typeof ttq !== 'undefined') {
            ttq.track('AddToCart', {
                content_type: 'product',
                content_id: productId,
                content_name: productName,
                value: parseFloat(price.replace(/[^0-9.]/g, '')) * quantity,
                currency: 'USD',
                quantity: quantity
            });
        }
    }

    trackWhatsAppClick(productId, productName) {
        if (typeof ttq !== 'undefined') {
            ttq.track('Contact', {
                content_type: 'whatsapp',
                content_id: productId,
                content_name: productName
            });
        }
    }

    trackInitiateCheckout(productId, productName, price) {
        if (typeof ttq !== 'undefined') {
            ttq.track('InitiateCheckout', {
                content_type: 'product',
                content_id: productId,
                content_name: productName,
                value: parseFloat(price.replace(/[^0-9.]/g, '')),
                currency: 'USD'
            });
        }
    }

    // Tracking de eventos personalizados
    trackCustomEvent(eventName, parameters = {}) {
        if (typeof ttq !== 'undefined') {
            ttq.track(eventName, parameters);
        }
    }
}

// Inicializar el tracker cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    window.tikTokTracker = new TikTokPixelTracker();
    
    // Configurar tracking automático para enlaces de WhatsApp
    document.querySelectorAll('a[href*="wa.me"], a[href*="whatsapp"]').forEach(link => {
        link.addEventListener('click', function() {
            const productName = document.querySelector('h1')?.textContent || 'Unknown Product';
            const productId = window.location.pathname.split('/').pop() || 'unknown';
            
            window.tikTokTracker.trackWhatsAppClick(productId, productName);
        });
    });
    
    // Tracking para botones de CTA
    document.querySelectorAll('.cta-button, .whatsapp-cta-main, .whatsapp-cta-fixed').forEach(button => {
        button.addEventListener('click', function() {
            const buttonText = this.textContent.trim();
            window.tikTokTracker.trackCustomEvent('ClickButton', {
                content_type: 'cta',
                content_name: buttonText
            });
        });
    });
});

// Funciones globales para usar en otras partes del código
window.trackProductView = function(productId, productName, price) {
    if (window.tikTokTracker) {
        window.tikTokTracker.trackProductView(productId, productName, price);
    }
};

window.trackWhatsAppClick = function(productId, productName) {
    if (window.tikTokTracker) {
        window.tikTokTracker.trackWhatsAppClick(productId, productName);
    }
};
