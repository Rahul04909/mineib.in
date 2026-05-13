<?php
/**
 * 3D Hero Section Component (Spline Integration)
 */
?>
<link rel="stylesheet" href="assets/css/hero.css">

<div class="relative-hero-container">
    <div class="hero-3d-wrapper">
        <div class="spline-bg-container">
            <!-- Spline 3D Viewer Script -->
            <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.3/build/spline-viewer.js"></script>
            <spline-viewer url="https://prod.spline.design/dJqTIQ-tE3ULUPMi/scene.splinecode"></spline-viewer>
            <div class="spline-overlay"></div>
        </div>

        <div class="hero-3d-content" id="hero3dContent">
            <div class="hero-content-inner">
                <div class="hero-left-col">
                    <h2 class="hero-3d-title">We're Building<br>Cool Experiences</h2>
                    <div class="hero-3d-tags">AI \ WEB3 \ UI \ 3D \ MOTION</div>
                </div>

                <div class="hero-right-col">
                    <p class="hero-3d-desc">Crafting Awesome Stories and Killer Designs to Make Brand Stand Out</p>
                    <div class="hero-3d-buttons">
                        <button class="btn-outline-white">Contact Us</button>
                        <button class="btn-solid-white">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z" fill="currentColor"/>
                            </svg>
                            Get Started
                        </button>
                    </div>
                </div>
            </div>
        </div>
</div>
