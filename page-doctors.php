<?php
/**
 * Template Name: Doctors Page
 */
get_header(); ?>

  <section class="hero">
    <div class="hero__container">
      <div class="hero__content">
        <h1 class="hero__headline" style="font-size: 3rem;">Meet Our Team of Exceptional Doctors</h1>
        <p class="hero__subheadline">
          Board-certified physicians who combine years of experience with genuine compassion for every patient.
        </p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">

      <!-- Doctor 1: Dr. Sarah Martinez -->
      <div class="doctor-profile__header fade-in" style="margin-bottom: 4rem;">
        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=800&h=800&fit=crop"
             alt="Dr. Sarah Martinez"
             class="doctor-profile__image">
        <div>
          <h2>Dr. Sarah Martinez, MD</h2>
          <p style="color: var(--color-primary-main); font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem;">
            Family Medicine
          </p>
          <div class="doctor-profile__credentials">
            <span class="credential-badge">Board Certified</span>
            <span class="credential-badge">15 Years Experience</span>
            <span class="credential-badge">English, Spanish</span>
          </div>
          <p style="margin: 1.5rem 0; line-height: 1.6;">
            I became a doctor because I wanted to make a real difference in people's lives. I believe in taking the time to truly listen
            to my patients and understand their concerns. Healthcare should feel like a partnership, not a prescription pad.
          </p>
          <p style="color: var(--color-text-secondary); margin-bottom: 1.5rem;">
            <strong>Education:</strong> MD from Stanford University School of Medicine<br>
            <strong>Residency:</strong> UCLA Medical Center<br>
            <strong>Specialties:</strong> Chronic disease management, preventive care, women's health
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
            <a href="<?php echo esc_url(home_url('/doctor-profile/')); ?>" class="btn btn--primary">View Full Profile</a>
            <a href="#" class="btn btn--secondary" data-modal="booking">Book with Dr. Martinez</a>
          </div>
        </div>
      </div>

      <!-- Doctor 2: Dr. Michael Chen -->
      <div class="doctor-profile__header fade-in" style="margin-bottom: 4rem;">
        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=800&h=800&fit=crop"
             alt="Dr. Michael Chen"
             class="doctor-profile__image">
        <div>
          <h2>Dr. Michael Chen, MD</h2>
          <p style="color: var(--color-primary-main); font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem;">
            Internal Medicine
          </p>
          <div class="doctor-profile__credentials">
            <span class="credential-badge">Board Certified</span>
            <span class="credential-badge">12 Years Experience</span>
            <span class="credential-badge">English, Mandarin</span>
          </div>
          <p style="margin: 1.5rem 0; line-height: 1.6;">
            My approach to medicine is rooted in evidence and empathy. I stay current with the latest research while never losing sight
            of the human being in front of me. Every patient deserves to feel heard and understood.
          </p>
          <p style="color: var(--color-text-secondary); margin-bottom: 1.5rem;">
            <strong>Education:</strong> MD from Johns Hopkins University<br>
            <strong>Residency:</strong> Massachusetts General Hospital<br>
            <strong>Specialties:</strong> Diabetes care, cardiovascular health, complex medical conditions
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
            <a href="<?php echo esc_url(home_url('/doctor-profile/')); ?>" class="btn btn--primary">View Full Profile</a>
            <a href="#" class="btn btn--secondary" data-modal="booking">Book with Dr. Chen</a>
          </div>
        </div>
      </div>

      <!-- Doctor 3: Dr. Emily Park -->
      <div class="doctor-profile__header fade-in" style="margin-bottom: 4rem;">
        <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=800&h=800&fit=crop"
             alt="Dr. Emily Park"
             class="doctor-profile__image">
        <div>
          <h2>Dr. Emily Park, MD</h2>
          <p style="color: var(--color-primary-main); font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem;">
            Pediatrics
          </p>
          <div class="doctor-profile__credentials">
            <span class="credential-badge">Board Certified</span>
            <span class="credential-badge">10 Years Experience</span>
            <span class="credential-badge">English, Korean</span>
          </div>
          <p style="margin: 1.5rem 0; line-height: 1.6;">
            Kids aren't just small adults—they need specialized care that makes them feel safe and supported. I love helping families
            navigate the challenges and joys of raising healthy, happy children.
          </p>
          <p style="color: var(--color-text-secondary); margin-bottom: 1.5rem;">
            <strong>Education:</strong> MD from Northwestern University<br>
            <strong>Residency:</strong> Children's Hospital of Philadelphia<br>
            <strong>Specialties:</strong> Well-child care, behavioral health, ADHD, adolescent medicine
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
            <a href="<?php echo esc_url(home_url('/doctor-profile/')); ?>" class="btn btn--primary">View Full Profile</a>
            <a href="#" class="btn btn--secondary" data-modal="booking">Book with Dr. Park</a>
          </div>
        </div>
      </div>

      <!-- Doctor 4: Dr. James Wilson -->
      <div class="doctor-profile__header fade-in" style="margin-bottom: 4rem;">
        <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=800&h=800&fit=crop"
             alt="Dr. James Wilson"
             class="doctor-profile__image">
        <div>
          <h2>Dr. James Wilson, MD</h2>
          <p style="color: var(--color-primary-main); font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem;">
            Family Medicine
          </p>
          <div class="doctor-profile__credentials">
            <span class="credential-badge">Board Certified</span>
            <span class="credential-badge">18 Years Experience</span>
            <span class="credential-badge">English</span>
          </div>
          <p style="margin: 1.5rem 0; line-height: 1.6;">
            After nearly two decades in medicine, I still find joy in getting to know my patients as people, not just medical charts.
            Building long-term relationships is what makes family medicine so rewarding.
          </p>
          <p style="color: var(--color-text-secondary); margin-bottom: 1.5rem;">
            <strong>Education:</strong> MD from University of Michigan<br>
            <strong>Residency:</strong> Cleveland Clinic<br>
            <strong>Specialties:</strong> Geriatric care, sports medicine, men's health
          </p>
          <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center;">
            <a href="<?php echo esc_url(home_url('/doctor-profile/')); ?>" class="btn btn--primary">View Full Profile</a>
            <a href="#" class="btn btn--secondary" data-modal="booking">Book with Dr. Wilson</a>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Stats Section -->
  <section class="section section--sage">
    <div class="container text-center">
      <h2 class="fade-in" style="margin-bottom: 3rem;">Why Our Patients Trust Us</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem;">
        <div class="fade-in">
          <div style="font-size: 3rem; font-weight: 700; color: var(--color-primary-dark); margin-bottom: 0.5rem;">5,000+</div>
          <p style="color: var(--color-text-secondary);">Active Patients</p>
        </div>
        <div class="fade-in">
          <div style="font-size: 3rem; font-weight: 700; color: var(--color-primary-dark); margin-bottom: 0.5rem;">4.9★</div>
          <p style="color: var(--color-text-secondary);">Average Rating</p>
        </div>
        <div class="fade-in">
          <div style="font-size: 3rem; font-weight: 700; color: var(--color-primary-dark); margin-bottom: 0.5rem;">55+</div>
          <p style="color: var(--color-text-secondary);">Combined Years of Experience</p>
        </div>
        <div class="fade-in">
          <div style="font-size: 3rem; font-weight: 700; color: var(--color-primary-dark); margin-bottom: 0.5rem;">100%</div>
          <p style="color: var(--color-text-secondary);">Board Certified</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section">
    <div class="container text-center">
      <h2 class="fade-in" style="margin-bottom: 1rem;">Ready to Meet Your New Doctor?</h2>
      <p class="fade-in" style="font-size: 1.125rem; color: var(--color-text-secondary); margin-bottom: 2rem;">
        All our doctors are accepting new patients. Book your appointment today.
      </p>
      <a href="#" class="btn btn--primary btn--large fade-in" data-modal="booking">Book Appointment</a>
    </div>
  </section>

<?php get_footer(); ?>
