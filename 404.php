<?php get_header(); ?>

<main id="main-content" class="container" style="padding: 10rem 0; text-align: center;">
    <h1 style="font-size: 6rem; color: var(--color-primary-dark); margin-bottom: 1rem;">404</h1>
    <h2 style="margin-bottom: 2rem;">Page Not Found</h2>
    <p style="color: var(--color-text-secondary); margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
        Sorry, the page you are looking for doesn't exist or has been moved.
        If you are the developer, please ensure you have created this page in the WordPress Admin or
        that the slug matches our custom templates.
    </p>
    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--primary btn--large">Return to Homepage</a>
</main>

<?php get_footer(); ?>
