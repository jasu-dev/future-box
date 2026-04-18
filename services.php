<?php
$page_title = 'Our Services – Future Boxx | IT, Networking, POS, CCTV Indore';
$page_description = 'Future Boxx offers IT Services, Networking Solutions, POS Systems, and CCTV Security & Surveillance in Indore. Explore all our technology services.';
$page_name = 'services';
include 'includes/header.php';
?>
<!-- PAGE HERO -->
<section class="page-hero">
  <div class="page-hero-bg-grid"></div>
  <div class="page-hero-glow"></div>
  <div class="page-hero-content fade-in">
    <nav class="breadcrumb" aria-label="breadcrumb">
      <a href="index.php">Home</a>
      <span>›</span>
      <span>Services</span>
    </nav>
    <div
      class="hero-badge"
      style="display: inline-flex; margin: 0 auto 24px">
      <span class="badge-dot"></span> What We Offer
    </div>
    <h1 class="page-hero-title">
      Our <span class="text-teal">Services</span>
    </h1>
    <p class="page-hero-subtitle">
      Comprehensive technology solutions tailored for businesses,
      institutions, and enterprises across Indore and Madhya Pradesh.
    </p>
  </div>
</section>

<!-- SERVICES OVERVIEW -->
<section class="section" style="background: var(--dark)">
  <div class="container">
    <div class="services-overview-grid fade-in">
      <!-- IT Services -->
      <a
        href="it-services.php"
        class="service-overview-card"
        style="text-decoration: none; color: inherit">
        <div class="sov-icon-wrap">
          <svg class="sov-icon" viewBox="0 0 48 48" fill="none">
            <path
              d="M6 14l12-8 12 8v10l-12 8-12-8V14z"
              stroke="currentColor"
              stroke-width="2.5" />
            <path
              d="M18 6v28M6 14l12 8 12-8"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round" />
            <path
              d="M26 28l8 6 8-6v-8l-8-6-8 6v8z"
              stroke="currentColor"
              stroke-width="2" />
          </svg>
        </div>
        <div class="sov-content">
          <h3>IT Services</h3>
          <p>
            End-to-end IT support, maintenance, and consulting. System
            repairs, data recovery, hardware upgrades, and Annual
            Maintenance Contracts for businesses of all sizes.
          </p>
          <span class="sov-link">Explore IT Services →</span>
        </div>
      </a>

      <!-- Networking -->
      <a
        href="networking.html"
        class="service-overview-card"
        style="text-decoration: none; color: inherit">
        <div class="sov-icon-wrap">
          <svg class="sov-icon" viewBox="0 0 48 48" fill="none">
            <circle
              cx="24"
              cy="10"
              r="4"
              stroke="currentColor"
              stroke-width="2.5" />
            <circle
              cx="10"
              cy="38"
              r="4"
              stroke="currentColor"
              stroke-width="2.5" />
            <circle
              cx="38"
              cy="38"
              r="4"
              stroke="currentColor"
              stroke-width="2.5" />
            <path
              d="M24 14v8M20.5 36l-7-14M27.5 36l7-14"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round" />
            <path
              d="M14 38h20"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round" />
          </svg>
        </div>
        <div class="sov-content">
          <h3>Networking Solutions</h3>
          <p>
            Office network setup, router & switch configuration, WiFi
            installation, and structured cabling. Build a fast, reliable,
            and secure network infrastructure.
          </p>
          <span class="sov-link">Explore Networking →</span>
        </div>
      </a>

      <!-- POS -->
      <a
        href="pos-systems.html"
        class="service-overview-card"
        style="text-decoration: none; color: inherit">
        <div class="sov-icon-wrap">
          <svg class="sov-icon" viewBox="0 0 48 48" fill="none">
            <rect
              x="10"
              y="6"
              width="28"
              height="22"
              rx="3"
              stroke="currentColor"
              stroke-width="2.5" />
            <rect
              x="14"
              y="10"
              width="20"
              height="14"
              rx="1"
              fill="currentColor"
              opacity=".15" />
            <path
              d="M8 28h32v12a2 2 0 01-2 2H10a2 2 0 01-2-2V28z"
              stroke="currentColor"
              stroke-width="2.5" />
            <path
              d="M18 34h12"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round" />
          </svg>
        </div>
        <div class="sov-content">
          <h3>POS Systems</h3>
          <p>
            Complete billing and retail management solutions. POS machines,
            barcode scanners, billing software integration, and inventory
            management for modern businesses.
          </p>
          <span class="sov-link">Explore POS Systems →</span>
        </div>
      </a>

      <!-- CCTV -->
      <a
        href="cctv-security.html"
        class="service-overview-card"
        style="text-decoration: none; color: inherit">
        <div class="sov-icon-wrap">
          <svg class="sov-icon" viewBox="0 0 48 48" fill="none">
            <circle
              cx="24"
              cy="22"
              r="8"
              stroke="currentColor"
              stroke-width="2.5" />
            <path
              d="M8 22c0-8.837 7.163-16 16-16s16 7.163 16 16"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round" />
            <path
              d="M14 36l4-4M34 36l-4-4M24 30v6"
              stroke="currentColor"
              stroke-width="2.5"
              stroke-linecap="round" />
            <circle
              cx="24"
              cy="22"
              r="3"
              fill="currentColor"
              opacity=".4" />
          </svg>
        </div>
        <div class="sov-content">
          <h3>CCTV, Security &amp; Surveillance</h3>
          <p>
            Advanced surveillance systems for homes, offices, and commercial
            properties. CCTV installation, IP cameras, remote monitoring,
            DVR/NVR setup, and security consultation.
          </p>
          <span class="sov-link">Explore CCTV &amp; Security →</span>
        </div>
      </a>
    </div>
  </div>
</section>

<?php include 'includes/why-choose-section.php'; ?>

<!-- CTA -->
<section class="section" style="background: var(--dark)">
  <div class="container">
    <div class="cta-banner fade-in">
      <h2>
        Not Sure Which <span class="text-teal">Service You Need?</span>
      </h2>
      <p>
        Talk to our experts and we'll help you choose the right solution for
        your specific requirements.
      </p>
      <div class="cta-actions">
        <a href="contact.php" class="btn btn-primary">Talk to an Expert</a>
        <a href="about.php" class="btn btn-outline">About Future Boxx</a>
      </div>
    </div>
  </div>
</section>

<?php
include 'includes/footer.php';
?>