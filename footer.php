  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="footer__container">

        <!-- Column 1: Branding -->
        <div class="footer__column">
          <div class="footer__logo"><?php bloginfo('name'); ?></div>
          <p class="footer__tagline"><?php bloginfo('description'); ?></p>
          <div class="social-links">
            <a href="#" class="social-links__icon" aria-label="Facebook">f</a>
            <a href="#" class="social-links__icon" aria-label="Instagram">📷</a>
            <a href="#" class="social-links__icon" aria-label="LinkedIn">in</a>
          </div>
        </div>

        <!-- Column 2: Quick Links -->
        <div class="footer__column">
          <h3 class="footer__column-heading">Quick Links</h3>
          <ul class="footer__list">
            <li class="footer__list-item"><a href="<?php echo esc_url(home_url('/')); ?>" class="footer__link">Home</a></li>
            <li class="footer__list-item"><a href="<?php echo esc_url(home_url('/services/')); ?>" class="footer__link">Services</a></li>
            <li class="footer__list-item"><a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="footer__link">Our Doctors</a></li>
            <li class="footer__list-item"><a href="<?php echo esc_url(home_url('/about/')); ?>" class="footer__link">About Us</a></li>
            <li class="footer__list-item"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="footer__link">Contact</a></li>
          </ul>
        </div>

        <!-- Column 3: Patient Resources -->
        <div class="footer__column">
          <h3 class="footer__column-heading">Patient Resources</h3>
          <ul class="footer__list">
            <li class="footer__list-item"><a href="#" class="footer__link">Patient Portal</a></li>
            <li class="footer__list-item"><a href="#" class="footer__link">Insurance Info</a></li>
            <li class="footer__list-item"><a href="#" class="footer__link">FAQs</a></li>
            <li class="footer__list-item"><a href="#" class="footer__link">New Patient Forms</a></li>
            <li class="footer__list-item"><a href="#" class="footer__link">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Column 4: Contact -->
        <div class="footer__column">
          <h3 class="footer__column-heading">Contact</h3>
          <div class="footer__contact-item">
            <span>📍</span>
            <span>123 Maple Street, Suite 200<br>Cityville, ST 12345</span>
          </div>
          <div class="footer__contact-item">
            <span>📞</span>
            <a href="tel:5551234567" class="footer__link">(555) 123-4567</a>
          </div>
          <div class="footer__contact-item">
            <span>✉️</span>
            <a href="mailto:hello@modernmedicalclinic.com" class="footer__link">hello@modernmedicalclinic.com</a>
          </div>
          <div class="footer__contact-item" style="margin-top: 1rem;">
            <div>
              <strong>Hours:</strong><br>
              Mon-Fri: 8am-7pm<br>
              Sat: 9am-3pm<br>
              Sun: Closed
            </div>
          </div>
        </div>

      </div>

      <div class="footer__bottom">
        <p>&copy; <span id="currentYear"><?php echo date('Y'); ?></span> Modern Medical Clinic. All rights reserved.</p>
        <div class="footer__legal-links">
          <a href="#" class="footer__legal-link">Terms of Service</a>
          <a href="#" class="footer__legal-link">Privacy Policy</a>
          <a href="#" class="footer__legal-link">Accessibility</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- STICKY MOBILE CTA BAR -->
  <div class="mobile-cta-bar" role="navigation" aria-label="Quick actions">
    <a href="tel:5551234567" class="mobile-cta-bar__button" aria-label="Call clinic">
      <span class="mobile-cta-bar__icon">📞</span>
      <span>Call Now</span>
    </a>
    <a href="#" class="mobile-cta-bar__button" data-modal="booking" aria-label="Book appointment online">
      <span class="mobile-cta-bar__icon">📅</span>
      <span>Book Online</span>
    </a>
  </div>

  <!-- BOOKING MODAL -->
  <div class="modal" id="bookingModal" role="dialog" aria-labelledby="modalTitle" aria-modal="true">
    <div class="modal__content">
      <div class="modal__header">
        <h2 class="modal__title" id="modalTitle">Book Your Appointment</h2>
        <button class="modal__close" aria-label="Close modal">&times;</button>
      </div>
      <div class="modal__body">
        <form id="bookingForm" class="form">
          <div class="form__row">
            <div class="form__group">
              <label for="firstName" class="form__label">First Name *</label>
              <input type="text" id="firstName" name="firstName" class="form__input" required>
            </div>
            <div class="form__group">
              <label for="lastName" class="form__label">Last Name *</label>
              <input type="text" id="lastName" name="lastName" class="form__input" required>
            </div>
          </div>

          <div class="form__group">
            <label for="email" class="form__label">Email *</label>
            <input type="email" id="email" name="email" class="form__input" required>
          </div>

          <div class="form__group">
            <label for="phone" class="form__label">Phone *</label>
            <input type="tel" id="phone" name="phone" class="form__input" required>
          </div>

          <div class="form__row">
            <div class="form__group">
              <label for="date" class="form__label">Preferred Date *</label>
              <input type="date" id="date" name="date" class="form__input" required>
            </div>
            <div class="form__group">
              <label for="time" class="form__label">Preferred Time *</label>
              <select id="time" name="time" class="form__select" required>
                <option value="">Select time</option>
                <option value="morning">Morning (8am-12pm)</option>
                <option value="afternoon">Afternoon (12pm-5pm)</option>
                <option value="evening">Evening (5pm-7pm)</option>
              </select>
            </div>
          </div>

          <div class="form__group">
            <label for="reason" class="form__label">Reason for Visit *</label>
            <select id="reason" name="reason" class="form__select" required>
              <option value="">Select reason</option>
              <option value="new-patient">New Patient Visit</option>
              <option value="follow-up">Follow-up Visit</option>
              <option value="urgent">Urgent Care</option>
              <option value="preventive">Preventive/Wellness</option>
            </select>
          </div>

          <div class="form__group">
            <label for="doctor" class="form__label">Preferred Doctor (Optional)</label>
            <select id="doctor" name="doctor" class="form__select">
              <option value="">No preference</option>
              <option value="martinez">Dr. Sarah Martinez</option>
              <option value="chen">Dr. Michael Chen</option>
              <option value="park">Dr. Emily Park</option>
              <option value="wilson">Dr. James Wilson</option>
            </select>
          </div>

          <div class="form__group">
            <label for="notes" class="form__label">Additional Notes (Optional)</label>
            <textarea id="notes" name="notes" class="form__textarea" placeholder="Any additional information..."></textarea>
          </div>

          <p class="form__helper">
            We'll confirm your appointment within 2 hours during business hours, or the next morning if submitted after 5pm.
          </p>

          <button type="submit" class="btn btn--primary btn--block btn--large">
            Submit Appointment Request
          </button>
        </form>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
