<?php
$page_title = 'Contact Us – Future Boxx | IT Solutions Indore';
$page_description = 'Get in touch with Future Boxx for IT Services, Networking, POS Systems, and CCTV solutions in Indore. Call +91 98260 68900 or email Sales@amhsystems.in';
$page_name = 'contact';

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
      <span>Contact Us</span>
    </nav>
    <div
      class="hero-badge"
      style="display: inline-flex; margin: 0 auto 24px">
      <span class="badge-dot"></span> Reach Us
    </div>
    <h1 class="page-hero-title">
      Get In <span class="text-teal">Touch</span>
    </h1>
    <p class="page-hero-subtitle">
      Have a technology requirement? We'd love to hear from you. Our team is
      ready to help you find the best solution for your business.
    </p>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="section contact-section" style="background: var(--dark)">
  <div class="container">
    <div class="contact-page-grid">
      <!-- LEFT: Contact Info -->
      <div class="contact-info-stack fade-in">
        <div class="contact-card" id="contact-address">
          <div class="contact-icon">📍</div>
          <div>
            <h4>Office Address</h4>
            <p>
              374, PU-4, Opposite Silvotel<br />Vijay Nagar, Indore (M.P.)
            </p>
          </div>
        </div>
        <div class="contact-card" id="contact-phone">
          <div class="contact-icon">📞</div>
          <div>
            <h4>Phone</h4>
            <p><a href="tel:+919203408551">+91 92034 08551</a></p>
            <p><a href="tel:+919407407401">+91 94074 07401</a></p>
            <p><a href="tel:+918770189906">+91 87701 89906</a></p>
          </div>
        </div>
        <div class="contact-card" id="contact-email">
          <div class="contact-icon">📧</div>
          <div>
            <h4>Email</h4>
            <p>
              <a href="mailto:Sales@amhsystems.in">Sales@amhsystems.in</a>
            </p>
          </div>
        </div>
        <!-- Map embed placeholder -->
        <div class="contact-map-card">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.738!2d75.8891!3d22.7196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjLCsDQzJzEwLjYiTiA3NcKwNTMnMjEuMiJF!5e0!3m2!1sen!2sin!4v1234567890"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Future Boxx Office Location">
          </iframe>
        </div>
      </div>

      <!-- RIGHT: Contact Form -->
      <form
        class="contact-form fade-in"
        id="contactForm"
        onsubmit="handleFormSubmit(event)">
        <h3
          style="
                font-family: var(--font-main);
                font-size: 1.4rem;
                font-weight: 700;
                margin-bottom: 8px;
              ">
          Send Us a Message
        </h3>
        <p
          style="
                color: var(--text-muted);
                font-size: 0.92rem;
                margin-bottom: 28px;
              ">
          Fill in the form below and we'll get back to you within 24 hours.
        </p>

        <div
          class="form-row"
          style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px">
          <div class="form-group">
            <label for="name">Your Name *</label>
            <input
              type="text"
              id="name"
              name="name"
              placeholder="Enter your name"
              required />
          </div>
          <div class="form-group">
            <label for="company">Company / Organization</label>
            <input
              type="text"
              id="company"
              name="company"
              placeholder="Your company name" />
          </div>
        </div>
        <div class="form-group">
          <label for="email">Email Address *</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required />
        </div>
        <div class="form-group">
          <label for="phone">Phone Number</label>
          <input
            type="tel"
            id="phone"
            name="phone"
            placeholder="+91 XXXXX XXXXX" />
        </div>
        <div class="form-group">
          <label for="service">Service Interested In</label>
          <select id="service" name="service">
            <option value="">Select a service</option>
            <option>IT Services</option>
            <option>Networking Solutions</option>
            <option>POS Systems</option>
            <option>CCTV, Security &amp; Surveillance</option>
            <option>General Inquiry</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Message *</label>
          <textarea
            id="message"
            name="message"
            rows="5"
            placeholder="Tell us about your requirements in detail..."
            required></textarea>
        </div>
        <button
          type="submit"
          class="btn btn-primary form-submit-btn"
          id="form-submit-btn"
          style="width: 100%; justify-content: center">
          Send Message →
        </button>
        <div
          class="form-success"
          id="formSuccess"
          style="
                display: none;
                margin-top: 16px;
                padding: 16px;
                background: rgba(94, 200, 200, 0.1);
                border: 1px solid var(--teal);
                border-radius: 8px;
                color: var(--teal);
                text-align: center;
              ">
          ✅ Thank you! We'll contact you shortly.
        </div>
      </form>
    </div>
  </div>
</section>

<!-- CTA -->
<section
  class="section"
  style="background: linear-gradient(180deg, var(--dark), #0a1020)">
  <div class="container">
    <div class="cta-banner fade-in">
      <h2>Need an <span class="text-teal">Urgent Quote?</span></h2>
      <p>
        Call us directly and we'll have a quotation ready for you within the
        hour.
      </p>
      <div class="cta-actions">
        <a href="tel:+919826068900" class="btn btn-primary">📞 +91 98260 68900</a>
        <a href="services.php" class="btn btn-outline">View Our Services</a>
      </div>
    </div>
  </div>
</section>

<style>
  @media (max-width: 600px) {
    .form-row {
      grid-template-columns: 1fr !important;
    }
  }
</style>

<?php
include 'includes/footer.php';
?>