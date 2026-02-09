<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

  <!-- PAGE HERO -->
  <section class="hero">
    <div class="hero__container">
      <div class="hero__content">
        <h1 class="hero__headline" style="font-size: 3rem;">Complete Healthcare Under One Roof</h1>
        <p class="hero__subheadline">
          From routine checkups to specialized care, our team is here for every stage of your health journey.
        </p>
      </div>
    </div>
  </section>

  <!-- PRIMARY CARE SECTION -->
  <section class="service-detail" id="primary-care">
    <div class="container">

      <div class="service-detail__grid fade-in">
        <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?w=800&h=600&fit=crop"
             alt="Doctor consulting with patient"
             class="service-detail__image">
        <div class="service-detail__content">
          <h2>Primary Care</h2>
          <p>
            Your first stop for all health concerns. Our primary care physicians provide comprehensive,
            continuous care for adults of all ages.
          </p>

          <!-- Early CTA -->
          <a href="#" class="btn btn--secondary btn--small" data-modal="booking" style="margin: var(--space-md) 0;">Book Primary Care Visit</a>

          <h3>What We Offer:</h3>

          <!-- Icon Grid for Services -->
          <div class="service-offerings-grid">
            <div class="service-offering-card">
              <div class="service-offering-icon">💓</div>
              <p class="service-offering-text">Annual physical exams and wellness checkups</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🛡️</div>
              <p class="service-offering-text">Chronic disease management (diabetes, hypertension, asthma)</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🩺</div>
              <p class="service-offering-text">Acute illness treatment (cold, flu, infections)</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🔍</div>
              <p class="service-offering-text">Health screenings and preventive care</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">💊</div>
              <p class="service-offering-text">Medication management and prescription refills</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">⚕️</div>
              <p class="service-offering-text">Minor procedures (sutures, biopsies)</p>
            </div>
          </div>

          <!-- Quick FAQs -->
          <div class="service-quick-faqs">
            <h4>Quick Primary Care Questions</h4>
            <details class="faq-accordion">
              <summary>Do you offer same-day sick visits?</summary>
              <p>Yes! We reserve same-day appointment slots for urgent needs like flu, infections, and minor injuries. Call us before 2pm or book online to check availability.</p>
            </details>
            <details class="faq-accordion">
              <summary>Can I schedule a telehealth appointment?</summary>
              <p>Absolutely! Telehealth visits are available for follow-ups, minor illnesses, prescription refills, and many other concerns. Schedule through our online portal or call to book a video visit.</p>
            </details>
          </div>

          <!-- Main CTA with motivating text -->
          <div class="service-cta-wrapper">
            <p class="service-cta-text">Ready for comprehensive care?</p>
            <a href="#" class="btn btn--primary btn--large" data-modal="booking">Book Primary Care Visit</a>
          </div>
        </div>
      </div>

      <!-- Meet Your Team Section -->
      <div class="service-team-section fade-in">
        <h3 class="service-team-title">Meet Your Primary Care Team</h3>
        <div class="service-team-grid">
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=200&h=200&fit=crop" alt="Dr. Sarah Johnson" class="service-team-photo">
            <p class="service-team-name">Dr. Sarah Johnson, MD</p>
            <p class="service-team-specialty">Family Medicine</p>
          </div>
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=200&h=200&fit=crop" alt="Dr. Michael Chen" class="service-team-photo">
            <p class="service-team-name">Dr. Michael Chen, MD</p>
            <p class="service-team-specialty">Internal Medicine</p>
          </div>
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200&h=200&fit=crop" alt="Dr. James Wilson" class="service-team-photo">
            <p class="service-team-name">Dr. James Wilson, MD</p>
            <p class="service-team-specialty">Family Medicine</p>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn--secondary">See All Doctors →</a>
      </div>

    </div>
  </section>

  <!-- PEDIATRICS SECTION -->
  <section class="service-detail section--alt" id="pediatrics">
    <div class="container">

      <div class="service-detail__grid fade-in">
        <img src="https://images.unsplash.com/photo-1581594549595-35f6edc7b762?w=800&h=600&fit=crop"
             alt="Pediatrician with child patient"
             class="service-detail__image">
        <div class="service-detail__content">
          <h2>Pediatrics</h2>
          <p>
            From newborn care to teen health, we make kids feel comfortable and parents feel confident.
            Our pediatricians are specially trained to care for children of all ages.
          </p>

          <!-- Early CTA -->
          <a href="#" class="btn btn--secondary btn--small" data-modal="booking" style="margin: var(--space-md) 0;">Book Pediatric Visit</a>

          <h3>What We Offer:</h3>

          <!-- Icon Grid for Services -->
          <div class="service-offerings-grid">
            <div class="service-offering-card">
              <div class="service-offering-icon">👶</div>
              <p class="service-offering-text">Well-child visits and developmental screenings</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">💉</div>
              <p class="service-offering-text">Immunizations and vaccine schedules</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🤒</div>
              <p class="service-offering-text">Sick visits (ear infections, strep throat, rashes)</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">⚽</div>
              <p class="service-offering-text">Sports physicals and school forms</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🧠</div>
              <p class="service-offering-text">Behavioral and learning assessments</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🌟</div>
              <p class="service-offering-text">Adolescent health and confidential teen visits</p>
            </div>
          </div>

          <!-- Quick FAQs -->
          <div class="service-quick-faqs">
            <h4>Quick Pediatrics Questions</h4>
            <details class="faq-accordion">
              <summary>What vaccines do you provide for children?</summary>
              <p>We offer all standard childhood vaccines including flu, COVID-19, HPV, Tdap, MMR, and more. Most vaccines are covered by insurance as preventive care.</p>
            </details>
            <details class="faq-accordion">
              <summary>Do you offer same-day sick visits for kids?</summary>
              <p>Yes! We reserve same-day appointment slots for urgent pediatric needs. Call us before 2pm or book online to check availability.</p>
            </details>
          </div>

          <!-- Main CTA with motivating text -->
          <div class="service-cta-wrapper">
            <p class="service-cta-text">Give your child the best start in health!</p>
            <a href="#" class="btn btn--primary btn--large" data-modal="booking">Book Pediatric Visit</a>
          </div>
        </div>
      </div>

      <!-- Meet Your Team Section -->
      <div class="service-team-section fade-in">
        <h3 class="service-team-title">Meet Your Pediatrics Team</h3>
        <div class="service-team-grid">
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200&h=200&fit=crop" alt="Dr. Emily Park" class="service-team-photo">
            <p class="service-team-name">Dr. Emily Park, MD</p>
            <p class="service-team-specialty">Pediatrics</p>
          </div>
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1537368910025-700350fe46c7?w=200&h=200&fit=crop" alt="Dr. David Martinez" class="service-team-photo">
            <p class="service-team-name">Dr. David Martinez, MD</p>
            <p class="service-team-specialty">Pediatrics</p>
          </div>
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1614608682850-e0d6ed316d47?w=200&h=200&fit=crop" alt="Dr. Lisa Thompson" class="service-team-photo">
            <p class="service-team-name">Dr. Lisa Thompson, MD</p>
            <p class="service-team-specialty">Pediatrics</p>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn--secondary">See All Doctors →</a>
      </div>

    </div>
  </section>

  <!-- WOMEN'S HEALTH SECTION -->
  <section class="service-detail" id="womens-health">
    <div class="container">

      <div class="service-detail__grid fade-in">
        <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=800&h=600&fit=crop"
             alt="Women's health consultation"
             class="service-detail__image">
        <div class="service-detail__content">
          <h2>Women's Health</h2>
          <p>
            Comprehensive care for women at every life stage, from adolescence through menopause and beyond.
            Our physicians provide compassionate, personalized care.
          </p>

          <!-- Early CTA -->
          <a href="#" class="btn btn--secondary btn--small" data-modal="booking" style="margin: var(--space-md) 0;">Book Women's Health Visit</a>

          <h3>What We Offer:</h3>

          <!-- Icon Grid for Services -->
          <div class="service-offerings-grid">
            <div class="service-offering-card">
              <div class="service-offering-icon">🩺</div>
              <p class="service-offering-text">Annual well-woman exams and Pap smears</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🤰</div>
              <p class="service-offering-text">Prenatal care and pregnancy support</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">💊</div>
              <p class="service-offering-text">Family planning and contraception counseling</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🌸</div>
              <p class="service-offering-text">Menopause management and hormone therapy</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🎗️</div>
              <p class="service-offering-text">Breast health and mammogram referrals</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">💚</div>
              <p class="service-offering-text">Treatment of common conditions (UTIs, yeast infections)</p>
            </div>
          </div>

          <!-- Quick FAQs -->
          <div class="service-quick-faqs">
            <h4>Quick Women's Health Questions</h4>
            <details class="faq-accordion">
              <summary>Do you offer prenatal care?</summary>
              <p>Yes! We provide comprehensive prenatal care including regular checkups, ultrasounds, and support throughout your pregnancy journey.</p>
            </details>
            <details class="faq-accordion">
              <summary>Can I schedule a telehealth appointment?</summary>
              <p>Absolutely! Telehealth visits are available for follow-ups, contraception counseling, and many women's health concerns. Schedule through our online portal.</p>
            </details>
          </div>

          <!-- Main CTA with motivating text -->
          <div class="service-cta-wrapper">
            <p class="service-cta-text">Compassionate care at every stage of life.</p>
            <a href="#" class="btn btn--primary btn--large" data-modal="booking">Book Women's Health Visit</a>
          </div>
        </div>
      </div>

      <!-- Meet Your Team Section -->
      <div class="service-team-section fade-in">
        <h3 class="service-team-title">Meet Your Women's Health Team</h3>
        <div class="service-team-grid">
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=200&h=200&fit=crop" alt="Dr. Rachel Anderson" class="service-team-photo">
            <p class="service-team-name">Dr. Rachel Anderson, MD</p>
            <p class="service-team-specialty">Obstetrics & Gynecology</p>
          </div>
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=200&h=200&fit=crop" alt="Dr. Jennifer Lee" class="service-team-photo">
            <p class="service-team-name">Dr. Jennifer Lee, MD</p>
            <p class="service-team-specialty">Women's Health</p>
          </div>
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1614608682850-e0d6ed316d47?w=200&h=200&fit=crop" alt="Dr. Maria Santos" class="service-team-photo">
            <p class="service-team-name">Dr. Maria Santos, MD</p>
            <p class="service-team-specialty">Women's Health</p>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn--secondary">See All Doctors →</a>
      </div>

    </div>
  </section>

  <!-- PREVENTIVE WELLNESS SECTION -->
  <section class="service-detail section--alt" id="preventive">
    <div class="container">

      <div class="service-detail__grid fade-in">
        <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=800&h=600&fit=crop"
             alt="Health screening and wellness"
             class="service-detail__image">
        <div class="service-detail__content">
          <h2>Preventive Wellness</h2>
          <p>
            The best medicine is prevention. Our wellness programs help you stay healthy,
            catch problems early, and live your best life.
          </p>

          <!-- Early CTA -->
          <a href="#" class="btn btn--secondary btn--small" data-modal="booking" style="margin: var(--space-md) 0;">Book Wellness Visit</a>

          <h3>What We Offer:</h3>

          <!-- Icon Grid for Services -->
          <div class="service-offerings-grid">
            <div class="service-offering-card">
              <div class="service-offering-icon">📋</div>
              <p class="service-offering-text">Health risk assessments and screenings</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">💉</div>
              <p class="service-offering-text">Vaccinations (flu, shingles, pneumonia, travel vaccines)</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🥗</div>
              <p class="service-offering-text">Lifestyle and nutrition counseling</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">⚖️</div>
              <p class="service-offering-text">Weight management programs</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🚭</div>
              <p class="service-offering-text">Smoking cessation support</p>
            </div>
            <div class="service-offering-card">
              <div class="service-offering-icon">🔬</div>
              <p class="service-offering-text">Lab work and diagnostic testing</p>
            </div>
          </div>

          <!-- Quick FAQs -->
          <div class="service-quick-faqs">
            <h4>Quick Wellness Questions</h4>
            <details class="faq-accordion">
              <summary>What vaccines do you provide?</summary>
              <p>We offer all standard vaccines including flu, COVID-19, shingles, pneumonia, HPV, Tdap, MMR, and travel vaccines. Most vaccines are covered by insurance as preventive care.</p>
            </details>
            <details class="faq-accordion">
              <summary>Do you offer nutrition counseling?</summary>
              <p>Yes! Our wellness programs include personalized nutrition counseling, weight management support, and lifestyle coaching to help you achieve your health goals.</p>
            </details>
          </div>

          <!-- Main CTA with motivating text -->
          <div class="service-cta-wrapper">
            <p class="service-cta-text">Start your journey to better health today!</p>
            <a href="#" class="btn btn--primary btn--large" data-modal="booking">Book Wellness Visit</a>
          </div>
        </div>
      </div>

      <!-- Meet Your Team Section -->
      <div class="service-team-section fade-in">
        <h3 class="service-team-title">Meet Your Wellness Team</h3>
        <div class="service-team-grid">
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1594824476967-48c8b964273f?w=200&h=200&fit=crop" alt="Dr. Sarah Johnson" class="service-team-photo">
            <p class="service-team-name">Dr. Sarah Johnson, MD</p>
            <p class="service-team-specialty">Preventive Medicine</p>
          </div>
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=200&h=200&fit=crop" alt="Dr. Michael Chen" class="service-team-photo">
            <p class="service-team-name">Dr. Michael Chen, MD</p>
            <p class="service-team-specialty">Internal Medicine</p>
          </div>
          <div class="service-team-member">
            <img src="https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=200&h=200&fit=crop" alt="Dr. James Wilson" class="service-team-photo">
            <p class="service-team-name">Dr. James Wilson, MD</p>
            <p class="service-team-specialty">Family Medicine</p>
          </div>
        </div>
        <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn--secondary">See All Doctors →</a>
      </div>

    </div>
  </section>

  <!-- FAQ SECTION -->
  <section class="section">
    <div class="container container--narrow">
      <h2 class="text-center" style="margin-bottom: 3rem;">Frequently Asked Questions</h2>

      <div class="fade-in" style="margin-bottom: 2rem;">
        <h3 style="color: var(--color-primary-dark); margin-bottom: 0.5rem;">What should I bring to my first appointment?</h3>
        <p style="color: var(--color-text-secondary);">
          Please bring a photo ID, insurance card, list of current medications, and any relevant medical records.
          New patient forms can be filled out online in advance to save time.
        </p>
      </div>

      <div class="fade-in" style="margin-bottom: 2rem;">
        <h3 style="color: var(--color-primary-dark); margin-bottom: 0.5rem;">Do you offer same-day sick visits?</h3>
        <p style="color: var(--color-text-secondary);">
          Yes! We reserve same-day appointment slots for urgent needs like flu, infections, and minor injuries.
          Call us before 2pm or book online to check availability.
        </p>
      </div>

      <div class="fade-in" style="margin-bottom: 2rem;">
        <h3 style="color: var(--color-primary-dark); margin-bottom: 0.5rem;">What vaccines do you provide?</h3>
        <p style="color: var(--color-text-secondary);">
          We offer all standard vaccines including flu, COVID-19, shingles, pneumonia, HPV, Tdap, MMR, and travel vaccines.
          Most vaccines are covered by insurance as preventive care.
        </p>
      </div>

      <div class="fade-in" style="margin-bottom: 2rem;">
        <h3 style="color: var(--color-primary-dark); margin-bottom: 0.5rem;">Can I schedule a telehealth appointment?</h3>
        <p style="color: var(--color-text-secondary);">
          Absolutely! Telehealth visits are available for follow-ups, minor illnesses, prescription refills, and many other concerns.
          Schedule through our online portal or call to book a video visit.
        </p>
      </div>

    </div>
  </section>

  <!-- CTA SECTION -->
  <section class="section section--sage">
    <div class="container text-center">
      <h2 class="fade-in" style="margin-bottom: 1rem;">Ready to Get Started?</h2>
      <p class="fade-in" style="font-size: 1.125rem; color: var(--color-text-secondary); margin-bottom: 2rem;">
        Book your appointment today and experience healthcare that puts you first.
      </p>
      <a href="#" class="btn btn--primary btn--large fade-in" data-modal="booking">Book Appointment</a>
    </div>
  </section>

<?php get_footer(); ?>
