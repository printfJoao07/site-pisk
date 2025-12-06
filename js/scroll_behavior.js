/**
 * Script de comportamento de scroll para o carrossel - VERSÃO SIMPLIFICADA
 * Implementa o comportamento de:
 * - Primeiro scroll: pula o carrossel direto para o conteúdo
 * - Scroll para cima no topo: volta para mostrar o carrossel
 */

(function() {
    'use strict';
    
    // Verificações básicas de suporte
    if (!window.addEventListener) return;
    
    const carrossel = document.getElementById('carrossel');
    if (!carrossel) return;
    
    // Estado de controle
    let isScrolling = false;
    let hasScrolledFromCarrossel = false;
    let isAtTop = true;
    
    // Calcula a altura do carrossel
    const carrosselHeight = carrossel.offsetHeight;
    
    /**
     * Função de animação de scroll suave
     */
    function smoothScrollTo(position) {
        if (isScrolling) return;
        
        isScrolling = true;
        const startPosition = window.pageYOffset;
        const distance = position - startPosition;
        const duration = 800;
        const startTime = performance.now ? performance.now() : Date.now();
        
        function animation(currentTime) {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            
            // easing suave
            const ease = progress < 0.5 
                ? 4 * progress * progress * progress 
                : 1 - Math.pow(-2 * progress + 2, 3) / 2;
            
            window.scrollTo(0, startPosition + (distance * ease));
            
            if (progress < 1) {
                requestAnimationFrame ? 
                    requestAnimationFrame(animation) :
                    setTimeout(function() { animation(Date.now()); }, 16);
            } else {
                isScrolling = false;
                checkIfAtTop();
            }
        }
        
        animation(startTime);
    }
    
    /**
     * Verifica se está no topo da página
     */
    function checkIfAtTop() {
        isAtTop = window.pageYOffset <= carrosselHeight;
    }
    
    /**
     * Verifica se está dentro da área do carrossel
     */
    function isInCarrossel() {
        return window.pageYOffset < carrosselHeight - 100;
    }
    
    /**
     * Handler principal do wheel event
     */
    function handleWheel(event) {
        if (isScrolling) {
            event.preventDefault();
            return;
        }
        
        const delta = event.deltaY;
        const inCarrossel = isInCarrossel();
        
        // Scroll para baixo - pular carrossel
        if (delta > 0 && inCarrossel && !hasScrolledFromCarrossel) {
            event.preventDefault();
            smoothScrollTo(carrosselHeight + 20);
            hasScrolledFromCarrossel = true;
        }
        
        // Scroll para cima - voltar para carrossel
        if (delta < 0 && isAtTop && hasScrolledFromCarrossel) {
            event.preventDefault();
            smoothScrollTo(0);
            hasScrolledFromCarrossel = false;
        }
    }
    
    /**
     * Handler para scroll tradicional
     */
    let lastScrollTop = 0;
    function handleScroll() {
        if (isScrolling) return;
        
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollDirection = scrollTop > lastScrollTop ? 'down' : 'up';
        const inCarrossel = isInCarrossel();
        
        // Scroll para baixo
        if (scrollDirection === 'down' && inCarrossel && !hasScrolledFromCarrossel) {
            smoothScrollTo(carrosselHeight + 20);
            hasScrolledFromCarrossel = true;
        }
        
        // Scroll para cima
        if (scrollDirection === 'up' && isAtTop && hasScrolledFromCarrossel) {
            smoothScrollTo(0);
            hasScrolledFromCarrossel = false;
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        checkIfAtTop();
    }
    
    // Registra os event listeners
    window.addEventListener('wheel', handleWheel, { passive: false });
    window.addEventListener('scroll', handleScroll, { passive: true });
    
    // Inicializa
    checkIfAtTop();
    document.body.classList.add('scroll-behavior-active');
    
    console.log('✅ Scroll behavior carregado com sucesso!');
    
})();