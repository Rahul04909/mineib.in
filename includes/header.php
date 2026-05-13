<?php
/**
 * Professional AI Agency Header for mineib.in
 * Refined structure with improved AI Box and Scoop Design
 */
?>
<header class="main-header-wrapper">
    <!-- Top Navigation Bar (Clean, No Border) -->
    <div class="header-top-nav">
        <div class="nav-container">
            <!-- Left: Brand Logo -->
            <div class="brand-side">
                <a href="index.php">
                    <img src="assets/logo/mine-ib-logo.png" alt="Mine IB" class="main-logo">
                </a>
            </div>

            <!-- Center: Main Navigation -->
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

            <!-- Right: Secondary Nav & Contact Button -->
            <div class="right-nav-side">
                <ul class="secondary-nav-list">
                    <li class="nav-item has-dropdown"><a href="#" class="nav-link muted">About Us <i class="chevron-down"></i></a></li>
                    <li class="nav-item"><a href="#" class="nav-link muted">Partners</a></li>
                    <li class="nav-item"><a href="#" class="nav-link muted">Solutions</a></li>
                    <li class="nav-item has-dropdown"><a href="#" class="nav-link muted">Resources <i class="chevron-down"></i></a></li>
                </ul>
                <a href="#" class="contact-button-nine">
                    Contact Us 
                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none" class="arrow-icon">
                        <path d="M1 8H15M15 8L8 1M15 8L8 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                
                <!-- Mobile Trigger -->
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Hero Content (Positioned higher) -->
    <div class="hero-content-wrapper">
        <div class="hero-text-container">
            <span class="promo-tag">AI-NATIVE ENGINEERING PARTNER</span>
            <h1 class="main-hero-title">
                Build, Run, and Evolve with AI—Without Losing Control
            </h1>
        </div>
    </div>

    <!-- Professional SVG Curve & AI Search Box -->
    <div class="svg-curve-wrapper">
        <svg class="smooth-curve-svg" viewBox="0 0 1440 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="edgeGradient" x1="0" y1="0" x2="2880" y2="0" gradientUnits="userSpaceOnUse">
                    <!-- First Cycle -->
                    <stop offset="0%" stop-color="#e2e8f0"/>
                    <stop offset="15%" stop-color="#e2e8f0"/>
                    <stop offset="20%" stop-color="#3B82F6"/>
                    <stop offset="25%" stop-color="#F97316"/>
                    <stop offset="30%" stop-color="#3B82F6"/>
                    <stop offset="35%" stop-color="#e2e8f0"/>
                    <stop offset="50%" stop-color="#e2e8f0"/>
                    <!-- Second Cycle (For continuous loop) -->
                    <stop offset="65%" stop-color="#e2e8f0"/>
                    <stop offset="70%" stop-color="#3B82F6"/>
                    <stop offset="75%" stop-color="#F97316"/>
                    <stop offset="80%" stop-color="#3B82F6"/>
                    <stop offset="85%" stop-color="#e2e8f0"/>
                    <stop offset="100%" stop-color="#e2e8f0"/>
                    
                    <animateTransform attributeName="gradientTransform" type="translate" from="0 0" to="-1440 0" dur="4s" repeatCount="indefinite" />
                </linearGradient>
            </defs>
            
            <!-- White Background Fill -->
            <path d="M0 0 L340 0 C390 0, 400 90, 450 90 L990 90 C1040 90, 1050 0, 1100 0 L1440 0 L1440 -10 L0 -10 Z" fill="white"></path>
            
            <!-- Animated Gradient Stroke -->
            <path d="M0 0 L340 0 C390 0, 400 90, 450 90 L990 90 C1040 90, 1050 0, 1100 0 L1440 0" fill="none" stroke="url(#edgeGradient)" stroke-width="2.5"></path>
        </svg>
        
        <div class="ai-search-box-container">
            <div class="ai-search-box">
                <div class="ai-box-left">
                    <div class="ai-icon-circle">
                        <img src="https://cdn-icons-png.flaticon.com/512/2103/2103633.png" alt="AI" style="width: 20px; height: 20px; filter: brightness(0) invert(1);">
                    </div>
                    <span class="ask-ai-text">Ask AI</span>
                    <input type="text" placeholder="Ask about NineHertz se" class="ai-input-field">
                </div>
                <div class="ai-box-right">
                    <div class="search-icon-btn">
                        <svg class="search-svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- GSAP Animation Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const title = document.querySelector(".main-hero-title");
    if (title) {
        // Create premium word-by-word reveal without paid plugins
        const text = title.innerText.trim();
        title.innerHTML = ""; // Clear existing text
        
        const words = text.split(" ");
        words.forEach(word => {
            const wordWrapper = document.createElement("span");
            wordWrapper.style.display = "inline-block";
            wordWrapper.style.overflow = "hidden";
            wordWrapper.style.verticalAlign = "bottom";
            wordWrapper.style.marginRight = "8px"; // Standard space width
            
            const innerSpan = document.createElement("span");
            innerSpan.innerText = word;
            innerSpan.style.display = "inline-block";
            innerSpan.style.transform = "translateY(100%)"; // Start below
            innerSpan.style.opacity = "0";
            
            wordWrapper.appendChild(innerSpan);
            title.appendChild(wordWrapper);
        });

        // Professional GSAP Timeline
        const tl = gsap.timeline({ defaults: { ease: "power4.out" } });
        
        // 1. Fade up the promo tag
        tl.fromTo(".promo-tag", 
            { opacity: 0, y: 20 }, 
            { opacity: 1, y: 0, duration: 1, delay: 0.1 }
        )
        // 2. Premium word reveal for the main title
        .to(".main-hero-title span span", 
            { opacity: 1, y: "0%", duration: 1.2, stagger: 0.04 },
            "-=0.6" // Start slightly before promo tag finishes
        )
        // 3. Subtle float up for the search box
        .fromTo(".ai-search-box-container",
            { opacity: 0, y: 30 },
            { opacity: 1, y: 0, duration: 1.2, ease: "back.out(1.2)" },
            "-=0.8"
        );
    }
});
</script>
