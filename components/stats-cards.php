<?php
/**
 * Statistics Cards Component
 */
?>
<section class="stats-section">
    <div class="container stats-container">
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
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        if (typeof gsap !== 'undefined') {
            gsap.from(".stat-item", {
                scrollTrigger: {
                    trigger: "#statsGrid",
                    start: "top 90%",
                    toggleActions: "play none none reverse"
                },
                y: 40,
                opacity: 0,
                duration: 1,
                stagger: 0.15,
                ease: "power3.out"
            });
        }
    });
</script>

<style>
.stats-section {
    background: #000;
    padding: 60px 0;
}
.stats-container {
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 20px;
}
</style>
