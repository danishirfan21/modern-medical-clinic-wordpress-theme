<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header" role="banner">
    <div class="header__container">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo" aria-label="<?php bloginfo('name'); ?> Home">
        <?php bloginfo('name'); ?>
      </a>

      <button class="header__toggle" aria-label="Toggle navigation" aria-expanded="false">
        ☰
      </button>

      <nav class="nav" role="navigation" aria-label="Main navigation">
        <ul class="nav__list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>" class="nav__link">Home</a></li>
          <li><a href="<?php echo esc_url(home_url('/services/')); ?>" class="nav__link">Services</a></li>
          <li><a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="nav__link">Our Doctors</a></li>
          <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav__link">About</a></li>
          <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav__link">Contact</a></li>
          <li><a href="#" class="nav__link nav__link--cta" data-modal="booking">Book Appointment</a></li>
        </ul>
      </nav>
    </div>
  </header>
