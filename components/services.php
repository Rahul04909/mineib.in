<?php
/**
 * Services & Statistics Component
 * Dark theme section matching the AI Native aesthetic.
 */
?>

<section class="services-section">
    <div class="container services-container">
        
        <!-- Statistics Row -->
        <div class="stats-grid" id="statsGrid">
            <div class="stat-card stat-item">
                <h3 class="stat-number">15+</h3>
                <p class="stat-text">Years of experience</p>
            </div>
            <div class="stat-card stat-item">
                <h3 class="stat-number">1100+</h3>
                <p class="stat-text">Projects Successfully Completed</p>
            </div>
            <div class="stat-card stat-item">
                <h3 class="stat-number">1.5M+</h3>
                <p class="stat-text">Users Trust Our Clients' Platforms</p>
            </div>
            <div class="stat-card stat-item">
                <h3 class="stat-number">$160M+</h3>
                <p class="stat-text">Secured by Our Clients</p>
            </div>
        </div>

        <!-- Heading Section -->
        <div class="services-header text-center" id="servicesHeader">
            <h2 class="services-title">Step into the <strong>Digital Future</strong> with Innovative Services</h2>
            <p class="services-desc">From startups to enterprises, our digital solutions are transforming how businesses globally conquer modern challenges with a fresh, digital-first approach.</p>
        </div>

        <!-- Services Icons Grid (Inner Borders Layout) -->
        <div class="services-icons-grid" id="servicesGrid">
            
            <div class="service-icon-box service-item">
                <div class="icon-wrapper">
                    <!-- Placeholder using a tech/abstract Unsplash image -->
                    <img src="https://images.unsplash.com/photo-1618761714954-0b8cd0026356?auto=format&fit=crop&w=300&q=80" alt="Mobile App">
                </div>
                <h4>Mobile App<br>Development</h4>
            </div>

            <div class="service-icon-box service-item">
                <div class="icon-wrapper">
                    <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=300&q=80" alt="Website Development">
                </div>
                <h4>Website<br>Development</h4>
            </div>

            <div class="service-icon-box service-item">
                <div class="icon-wrapper">
                    <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=300&q=80" alt="Software Development">
                </div>
                <h4>Software<br>Development</h4>
            </div>

            <div class="service-icon-box service-item">
                <div class="icon-wrapper">
                    <img src="https://images.unsplash.com/photo-1633412802994-5c058f151b66?auto=format&fit=crop&w=300&q=80" alt="Salesforce Development">
                </div>
                <h4>Salesforce<br>Development</h4>
            </div>

            <div class="service-icon-box service-item">
                <div class="icon-wrapper">
                    <img src="https://images.unsplash.com/photo-1639762681485-074b7f4fc8fd?auto=format&fit=crop&w=300&q=80" alt="Blockchain Development">
                </div>
                <h4>Blockchain<br>Development</h4>
            </div>

            <div class="service-icon-box service-item">
                <div class="icon-wrapper">
                    <img src="https://images.unsplash.com/photo-1620712943543-bcc4688e7485?auto=format&fit=crop&w=300&q=80" alt="AI Development">
                </div>
                <h4>AI<br>Development</h4>
            </div>

            <div class="service-icon-box service-item">
                <div class="icon-wrapper">
                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?auto=format&fit=crop&w=300&q=80" alt="eCommerce Development">
                </div>
                <h4><span style="color: #c026d3;">eCommerce</span><br><span style="color: #06b6d4;">Development</span></h4>
            </div>

            <div class="service-icon-box service-item">
                <div class="icon-wrapper">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?auto=format&fit=crop&w=300&q=80" alt="UI/UX Design">
                </div>
                <h4>UI/UX<br>Design</h4>
            </div>

        </div>
    </div>
</section>

<!-- ScrollTrigger relies on GSAP which is already included in header.php -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        // Register ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // 1. Animate Stats Cards
        gsap.from(".stat-item", {
            scrollTrigger: {
                trigger: "#statsGrid",
                start: "top 85%", // Trigger when the top of the grid hits 85% down the viewport
                toggleActions: "play none none reverse"
            },
            y: 40,
            opacity: 0,
            duration: 0.8,
            stagger: 0.1,
            ease: "power3.out"
        });

        // 2. Animate Header Text
        gsap.from("#servicesHeader", {
            scrollTrigger: {
                trigger: "#servicesHeader",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            y: 30,
            opacity: 0,
            duration: 0.8,
            ease: "power3.out"
        });

        // 3. Animate Services Icons
        gsap.from(".service-item", {
            scrollTrigger: {
                trigger: "#servicesGrid",
                start: "top 85%",
                toggleActions: "play none none reverse"
            },
            scale: 0.8,
            y: 30,
            opacity: 0,
            duration: 0.6,
            stagger: 0.08,
            ease: "back.out(1.2)"
        });
    });
</script>
