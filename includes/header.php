<?php
/**
 * Ultimate Interactive Header for mineib.in
 * Precise replica of the NineHertz Hero + Header Architecture
 */
?>
<header class="main-header-wrapper">
    <!-- Top Navigation Bar -->
    <div class="header-top-nav">
        <div class="nav-container">
            <!-- Left: Logo -->
            <div class="brand-side">
                <a href="index.php">
                    <img src="assets/logo/mine-ib-logo.png" alt="Mine IB" class="main-logo">
                </a>
            </div>

            <!-- Center: Primary Menus -->
            <nav class="center-nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="#" class="nav-link ai-link-special">
                            <img src="https://cdn-icons-png.flaticon.com/512/2103/2103633.png" alt="AI" class="ai-head-icon">
                            AI
                        </a>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">What We Do <i class="chevron-down"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Engagement Models</a>
                    </li>
                    <li class="nav-item has-dropdown">
                        <a href="#" class="nav-link">Industries <i class="chevron-down"></i></a>
                    </li>
                </ul>
            </nav>

            <!-- Right: Secondary Menus & CTA -->
            <div class="right-nav-side">
                <ul class="secondary-nav-list">
                    <li class="nav-item has-dropdown"><a href="#" class="nav-link muted">About Us <i class="chevron-down"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link muted">Partners</a></li>
                    <li class="nav-item"><a href="#" class="nav-link muted">Solutions</a></li>
                    <li class="nav-item has-dropdown"><a href="#" class="nav-link muted">Resources <i class="chevron-down"></i></a></li>
                </ul>
                <a href="#" class="contact-button-nine">
                    Contact Us 
                    <svg viewBox="0 0 20 20" fill="currentColor" class="arrow-icon">
                        <path d="M5.293 4.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L10.586 11H3a1 1 0 110-2h7.586l-4.293-4.293a1 1 0 010-1.414z" />
                    </svg>
                </a>
                
                <!-- Mobile Toggle -->
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Hero Content Area (Still part of the white header) -->
    <div class="hero-content-wrapper">
        <div class="hero-text-container">
            <span class="promo-tag">AI-NATIVE ENGINEERING PARTNER</span>
            <h1 class="main-hero-title">
                Build, Run, and Evolve with AI—Without Losing Control
            </h1>
        </div>
    </div>

    <!-- Custom Bottom Design with AI Box -->
    <div class="header-bottom-design">
        <div class="cradle-scoop">
            <div class="ai-search-box">
                <div class="ai-box-left">
                    <div class="ai-icon-circle">
                        <svg viewBox="0 0 24 24" fill="none" class="sparkle-icon">
                            <path d="M12 2L14.85 8.35L21.5 9.35L16.7 14L17.85 20.6L12 17.5L6.15 20.6L7.3 14L2.5 9.35L9.15 8.35L12 2Z" fill="white"/>
                        </svg>
                    </div>
                    <span class="ask-ai-text">Ask AI</span>
                    <input type="text" placeholder="Build your" class="ai-input-field">
                </div>
                <div class="ai-box-right">
                    <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mobileBtn = document.getElementById('mobileMenuBtn');
    const centerNav = document.querySelector('.center-nav');
    const rightNav = document.querySelector('.secondary-nav-list');

    mobileBtn.addEventListener('click', function() {
        this.classList.toggle('active');
        // Handle mobile menu expansion
    });

    // Add scroll effect for sticky nav transition
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header-top-nav');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
</script>
