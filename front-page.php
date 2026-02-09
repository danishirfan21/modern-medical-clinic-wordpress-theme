<?php get_header(); ?>

  <!-- HERO SECTION - VARIANT A (Trust-Focused) -->
  <section class="hero" id="heroVariantA" role="banner">
    <button class="hero__ab-toggle" id="heroAbToggle" aria-label="Toggle hero variant">
      View Variant B (Convenience)
    </button>

    <div class="hero__container">
      <div class="hero__content">
        <h1 class="hero__headline">Your Family's Health Partner, Not Just a Clinic</h1>
        <p class="hero__subheadline">
          Same-day appointments · Real doctors who listen · Accepted by most insurance
        </p>
        <div class="hero__ctas">
          <a href="#" class="btn btn--primary btn--large" data-modal="booking" aria-label="Book an appointment">
            Book Appointment
          </a>
          <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn--secondary btn--large" aria-label="View our services">
            View Services
          </a>
        </div>

        <div class="hero__trust-badge" aria-label="Patient rating">
          <span class="hero__trust-badge-stars" aria-label="4.9 out of 5 stars">★★★★★</span>
          <span class="hero__trust-badge-text">4.9/5 from 420+ patients</span>
        </div>
      </div>
    </div>
  </section>

  <!-- HERO SECTION - VARIANT B (Convenience-Focused) -->
  <section class="hero hero--variant-b" id="heroVariantB" style="display: none;">
    <div class="hero__urgency-banner">
      ✓ Appointments available today — Click to see times
    </div>

    <div class="hero__split-left">
      <div class="hero__split-content">
        <h1 class="hero__headline">Healthcare That Fits Your Schedule</h1>
        <p class="hero__subheadline">
          Book online in 60 seconds · Same-day appointments · In-person or video visits
        </p>
        <div class="hero__ctas">
          <a href="#" class="btn btn--primary btn--large" data-modal="booking">Book Now</a>
          <p style="margin-top: 1rem; font-size: 0.875rem; color: var(--color-text-secondary);">
            Or call <a href="tel:5551234567" style="color: var(--color-primary-dark);">(555) 123-4567</a>
          </p>
        </div>
      </div>
    </div>

    <div class="hero__split-right">
      <div class="hero__split-content">
        <div style="font-size: 5rem; margin-bottom: 1rem;">📱</div>
        <h2 style="color: white; font-size: 1.5rem;">Telehealth Available</h2>
        <p style="color: rgba(255,255,255,0.9);">See your doctor from home via video call</p>
      </div>
    </div>
  </section>

  <!-- PROBLEM-SOLUTION GRID -->
  <section class="problem-solution">
    <div class="container">
      <div class="problem-solution__grid">

        <article class="problem-solution__card fade-in">
          <div class="problem-solution__icon" aria-hidden="true">🕐</div>
          <h3 class="problem-solution__title">Busy Schedule?</h3>
          <p class="problem-solution__description">
            Same-day & weekend appointments available. We work around your life.
          </p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--secondary">See Availability</a>
        </article>

        <article class="problem-solution__card fade-in">
          <div class="problem-solution__icon" aria-hidden="true">📱</div>
          <h3 class="problem-solution__title">Prefer Online?</h3>
          <p class="problem-solution__description">
            Book your appointment online in 60 seconds. No phone calls required.
          </p>
          <a href="#" class="btn btn--secondary" data-modal="booking">Get Started</a>
        </article>

        <article class="problem-solution__card fade-in">
          <div class="problem-solution__icon" aria-hidden="true">🏥</div>
          <h3 class="problem-solution__title">New to the Area?</h3>
          <p class="problem-solution__description">
            Meet our team of 8 board-certified specialists ready to care for you.
          </p>
          <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn--secondary">Our Doctors</a>
        </article>

      </div>
    </div>
  </section>

  <!-- SERVICES OVERVIEW -->
  <section class="services section--sage">
    <div class="container">
      <h2 class="services__heading fade-in">
        Comprehensive Care for Every Stage of Life
      </h2>

      <div class="services__grid">

        <article class="service-card fade-in">
          <div class="service-card__icon" aria-hidden="true">🩺</div>
          <h3 class="service-card__title">Primary Care</h3>
          <p class="service-card__description">
            Annual physicals, chronic disease management, preventive care, and urgent sick visits.
          </p>
          <a href="<?php echo esc_url(home_url('/services/')); ?>#primary-care" class="btn btn--secondary">Learn More</a>
        </article>

        <article class="service-card fade-in">
          <div class="service-card__icon" aria-hidden="true">👶</div>
          <h3 class="service-card__title">Pediatrics</h3>
          <p class="service-card__description">
            From newborn care to teen health. We make kids feel comfortable and parents feel confident.
          </p>
          <a href="<?php echo esc_url(home_url('/services/')); ?>#pediatrics" class="btn btn--secondary">Learn More</a>
        </article>

        <article class="service-card fade-in">
          <div class="service-card__icon" aria-hidden="true">🌸</div>
          <h3 class="service-card__title">Women's Health</h3>
          <p class="service-card__description">
            Well-woman exams, prenatal care, family planning, and menopause management.
          </p>
          <a href="<?php echo esc_url(home_url('/services/')); ?>#womens-health" class="btn btn--secondary">Learn More</a>
        </article>

        <article class="service-card fade-in">
          <div class="service-card__icon" aria-hidden="true">🛡️</div>
          <h3 class="service-card__title">Preventive Wellness</h3>
          <p class="service-card__description">
            Health screenings, vaccinations, lifestyle counseling, and nutrition guidance.
          </p>
          <a href="<?php echo esc_url(home_url('/services/')); ?>#preventive" class="btn btn--secondary">Learn More</a>
        </article>

      </div>
    </div>
  </section>

  <!-- DOCTORS CAROUSEL -->
  <section class="doctors-carousel section--alt">
    <div class="container">
      <h2 class="doctors-carousel__heading fade-in">Meet Our Doctors</h2>

      <div class="doctors-carousel__container">
        <div class="doctors-carousel__track">

          <article class="doctor-card">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop"
                 alt="Dr. Sarah Martinez"
                 class="doctor-card__image">
            <h3 class="doctor-card__name">Dr. Sarah Martinez, MD</h3>
            <p class="doctor-card__specialty">Family Medicine</p>
            <span class="doctor-card__badge">Accepting new patients</span>
            <p class="doctor-card__experience">15 years of experience</p>
            <a href="<?php echo esc_url(home_url('/doctor-profile/')); ?>" class="btn btn--secondary">View Profile</a>
          </article>

          <article class="doctor-card">
            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop"
                 alt="Dr. Michael Chen"
                 class="doctor-card__image">
            <h3 class="doctor-card__name">Dr. Michael Chen, MD</h3>
            <p class="doctor-card__specialty">Internal Medicine</p>
            <span class="doctor-card__badge">Accepting new patients</span>
            <p class="doctor-card__experience">12 years of experience</p>
            <a href="<?php echo esc_url(home_url('/doctor-profile/')); ?>" class="btn btn--secondary">View Profile</a>
          </article>

          <article class="doctor-card">
            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=400&h=400&fit=crop"
                 alt="Dr. Emily Park"
                 class="doctor-card__image">
            <h3 class="doctor-card__name">Dr. Emily Park, MD</h3>
            <p class="doctor-card__specialty">Pediatrics</p>
            <span class="doctor-card__badge">Accepting new patients</span>
            <p class="doctor-card__experience">10 years of experience</p>
            <a href="<?php echo esc_url(home_url('/doctor-profile/')); ?>" class="btn btn--secondary">View Profile</a>
          </article>

          <article class="doctor-card">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=400&h=400&fit=crop"
                 alt="Dr. James Wilson"
                 class="doctor-card__image">
            <h3 class="doctor-card__name">Dr. James Wilson, MD</h3>
            <p class="doctor-card__specialty">Family Medicine</p>
            <span class="doctor-card__badge">Accepting new patients</span>
            <p class="doctor-card__experience">18 years of experience</p>
            <a href="<?php echo esc_url(home_url('/doctor-profile/')); ?>" class="btn btn--secondary">View Profile</a>
          </article>

        </div>

        <div class="carousel-buttons">
          <button class="carousel-button carousel-button--prev" aria-label="Previous doctor">
            ←
          </button>
          <button class="carousel-button carousel-button--next" aria-label="Next doctor">
            →
          </button>
        </div>

        <div class="carousel-nav" role="navigation" aria-label="Carousel navigation"></div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonials">
    <div class="container">
      <h2 class="testimonials__heading fade-in">What Our Patients Say</h2>

      <article class="testimonial fade-in">
        <div class="testimonial__image-wrapper">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop"
               alt="Marcus T."
               class="testimonial__image">
        </div>
        <div class="testimonial__content">
          <div class="testimonial__quote-icon" aria-hidden="true">"</div>
          <p class="testimonial__text">
            Dr. Chen actually listened to me. I felt heard for the first time in years.
          </p>
          <p class="testimonial__author">— Marcus T., Patient since 2022</p>
          <div class="testimonial__stars" aria-label="5 stars">★★★★★</div>
        </div>
      </article>

      <article class="testimonial fade-in">
        <div class="testimonial__image-wrapper">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop"
               alt="Jennifer L."
               class="testimonial__image">
        </div>
        <div class="testimonial__content">
          <div class="testimonial__quote-icon" aria-hidden="true">"</div>
          <p class="testimonial__text">
            My daughter actually asks when we can visit Dr. Park! She makes kids feel so comfortable.
          </p>
          <p class="testimonial__author">— Jennifer L., Mother of two</p>
          <div class="testimonial__stars" aria-label="5 stars">★★★★★</div>
        </div>
      </article>

      <article class="testimonial fade-in">
        <div class="testimonial__image-wrapper">
          <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=400&h=400&fit=crop"
               alt="Carlos R."
               class="testimonial__image">
        </div>
        <div class="testimonial__content">
          <div class="testimonial__quote-icon" aria-hidden="true">"</div>
          <p class="testimonial__text">
            We've been coming here for 8 years—through pregnancies, illnesses, and wellness checks. This clinic feels like family.
          </p>
          <p class="testimonial__author">— Carlos R., Patient since 2016</p>
          <div class="testimonial__stars" aria-label="5 stars">★★★★★</div>
        </div>
      </article>

    </div>
  </section>

  <!-- INSURANCE & TELEHEALTH -->
  <section class="insurance">
    <div class="container">
      <div class="insurance__content">

        <div class="insurance__column fade-in">
          <h2 class="insurance__heading">We Accept Most Insurance Plans</h2>
          <p>Including Aetna, Blue Cross Blue Shield, UnitedHealthcare, Cigna, Medicare, and 20+ more.</p>
          <div class="insurance__logos">
            <div class="insurance__logo" title="Aetna">Aetna</div>
            <div class="insurance__logo" title="Blue Cross">BCBS</div>
            <div class="insurance__logo" title="UnitedHealthcare">United</div>
            <div class="insurance__logo" title="Cigna">Cigna</div>
            <div class="insurance__logo" title="Medicare">Medicare</div>
          </div>
        </div>

        <div class="insurance__column fade-in">
          <div class="telehealth__icon" aria-hidden="true">💻</div>
          <h2 class="insurance__heading">Can't Come In? Try Telehealth</h2>
          <p>See your doctor from home via secure video call. Same quality care, more convenience.</p>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn--primary" style="margin-top: 1rem;">Schedule Video Visit</a>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
