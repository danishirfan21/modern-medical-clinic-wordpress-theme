<?php get_header(); ?>

<main id="main-content" class="container" style="padding: 4rem 0;">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php if (!is_front_page()) : ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php endif; ?>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
    else :
        ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php
    endif;
    ?>
</main>

<?php get_footer(); ?>
