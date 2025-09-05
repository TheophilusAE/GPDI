import './bootstrap';

// GPDI Website JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Theme init and toggle
    const root = document.documentElement;
    const THEME_KEY = 'theme';
    const themeToggle = document.getElementById('theme-toggle');
    const themeToggleMobile = document.getElementById('theme-toggle-mobile');

    function applyTheme(mode) {
        if (mode === 'dark') {
            root.classList.add('user-dark');
            updateToggleIcons('dark');
        } else {
            root.classList.remove('user-dark');
            updateToggleIcons('light');
        }
    }

    function updateToggleIcons(mode) {
        const iconDesktop = themeToggle?.querySelector('i');
        const iconMobile = themeToggleMobile?.querySelector('i');
        const iconClass = mode === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
        if (iconDesktop) iconDesktop.className = iconClass;
        if (iconMobile) iconMobile.className = iconClass + ' mr-2';
    }

    try {
        const saved = localStorage.getItem(THEME_KEY);
        if (saved) {
            applyTheme(saved);
        } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            applyTheme('dark');
        } else {
            applyTheme('light');
        }
    } catch (e) {}

    function toggleTheme() {
        const isDark = root.classList.contains('user-dark');
        const next = isDark ? 'light' : 'dark';
        applyTheme(next);
        try { localStorage.setItem(THEME_KEY, next); } catch (e) {}
    }

    themeToggle?.addEventListener('click', toggleTheme);
    themeToggleMobile?.addEventListener('click', toggleTheme);

    
    // Smooth scrolling for all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80; // Account for fixed header
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Navbar background change on scroll
    const navbar = document.querySelector('nav');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('bg-white/95', 'shadow-lg');
        } else {
            navbar.classList.remove('bg-white/95', 'shadow-lg');
        }
    });

    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            
            // Change icon
            const icon = this.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.className = 'fas fa-bars text-xl';
            } else {
                icon.className = 'fas fa-times text-xl';
            }
        });
    }

    // Close mobile menu when clicking on a link
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', function() {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuButton.querySelector('i');
            icon.className = 'fas fa-bars text-xl';
        });
    });

    // Form submission handling
    const contactForm = document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            if (!data.first_name || !data.email || !data.message) {
                showNotification('Mohon lengkapi semua field yang diperlukan', 'error');
                return;
            }
            
            // Simulate form submission
            showNotification('Mengirim pesan...', 'info');
            
            setTimeout(() => {
                showNotification('Pesan berhasil dikirim! Kami akan segera menghubungi Anda.', 'success');
                this.reset();
            }, 2000);
        });
    }

    // Notification system
    function showNotification(message, type = 'info') {
        // Remove existing notifications
        const existingNotifications = document.querySelectorAll('.notification');
        existingNotifications.forEach(notification => notification.remove());
        
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `notification fixed top-24 right-4 z-50 px-6 py-4 rounded-lg shadow-lg transform translate-x-full transition-transform duration-300 max-w-sm`;
        
        // Set notification styles based on type
        switch(type) {
            case 'success':
                notification.className += ' bg-green-500 text-white';
                break;
            case 'error':
                notification.className += ' bg-red-500 text-white';
                break;
            case 'warning':
                notification.className += ' bg-yellow-500 text-white';
                break;
            default:
                notification.className += ' bg-blue-500 text-white';
        }
        
        notification.innerHTML = `
            <div class="flex items-center justify-between">
                <span>${message}</span>
                <button class="ml-4 text-white hover:text-gray-200" onclick="this.parentElement.parentElement.remove()">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        // Auto remove after 5 seconds
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.remove();
                }
            }, 300);
        }, 5000);
    }

    // Parallax effect for hero section
    const heroSection = document.getElementById('home');
    if (heroSection) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.5;
            
            const animatedElements = heroSection.querySelectorAll('.absolute');
            animatedElements.forEach((element, index) => {
                const speed = (index + 1) * 0.1;
                element.style.transform = `translateY(${rate * speed}px)`;
            });
        });
    }

    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.service-card, .event-card').forEach(el => {
        observer.observe(el);
    });

    // Counter animation for statistics
    function animateCounter(element, target, duration = 2000) {
        let start = 0;
        const increment = target / (duration / 16);
        
        function updateCounter() {
            start += increment;
            if (start < target) {
                element.textContent = Math.floor(start);
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        }
        
        updateCounter();
    }

    // Initialize counters when they come into view
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.dataset.target);
                animateCounter(counter, target);
                counterObserver.unobserve(counter);
            }
        });
    });

    // Add data-target attributes to elements you want to animate
    document.querySelectorAll('[data-counter]').forEach(counter => {
        counterObserver.observe(counter);
    });

    // Lazy loading for images
    const imageObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });

    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });

    // Add loading states to buttons
    document.querySelectorAll('button[type="submit"], .btn-primary').forEach(button => {
        button.addEventListener('click', function() {
            if (this.type === 'submit' || this.classList.contains('btn-primary')) {
                const originalText = this.textContent;
                this.textContent = 'Memproses...';
                this.disabled = true;
                
                // Reset button after 3 seconds (for demo purposes)
                setTimeout(() => {
                    this.textContent = originalText;
                    this.disabled = false;
                }, 3000);
            }
        });
    });

    // Add hover effects to service cards
    document.querySelectorAll('.service-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Add typing effect to hero title
    function typeWriter(element, text, speed = 100) {
        let i = 0;
        element.innerHTML = '';
        
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        
        type();
    }

    // Initialize typing effect if element exists
    const heroTitle = document.querySelector('#home h1');
    if (heroTitle) {
        const originalText = heroTitle.textContent;
        setTimeout(() => {
            typeWriter(heroTitle, originalText, 50);
        }, 1000);
    }

    // Add scroll progress indicator
    const progressBar = document.createElement('div');
    progressBar.className = 'fixed top-0 left-0 w-0 h-1 bg-gradient-to-r from-blue-400 to-red-400 z-50 transition-all duration-300';
    document.body.appendChild(progressBar);

    window.addEventListener('scroll', function() {
        const scrolled = (window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100;
        progressBar.style.width = scrolled + '%';
    });

    // Add back to top button
    const backToTopButton = document.createElement('button');
    backToTopButton.className = 'fixed bottom-8 right-8 w-12 h-12 bg-gradient-to-r from-blue-400 to-red-400 text-white rounded-full shadow-lg hover:shadow-xl hover:scale-110 transition-all duration-300 opacity-0 pointer-events-none z-40';
    backToTopButton.innerHTML = '<i class="fas fa-chevron-up"></i>';
    document.body.appendChild(backToTopButton);

    window.addEventListener('scroll', function() {
        if (window.scrollY > 300) {
            backToTopButton.classList.remove('opacity-0', 'pointer-events-none');
        } else {
            backToTopButton.classList.add('opacity-0', 'pointer-events-none');
        }
    });

    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Add ripple effect to buttons
    document.querySelectorAll('button, .btn').forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;
            
            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });

    console.log('GPDI Website loaded successfully! 🎉');
});

// Add CSS for ripple effect
const style = document.createElement('style');
style.textContent = `
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: ripple-animation 0.6s linear;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    .animate-in {
        animation: slideInUp 0.6s ease-out forwards;
    }
    
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .service-card {
        transition: all 0.3s ease;
    }
    
    .notification {
        z-index: 9999;
    }
`;
document.head.appendChild(style);
