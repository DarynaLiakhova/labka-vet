<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<article class="article">
    <div class="article__head">
        <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="article__back">← All articles</a>

        <div class="article__category"><?php the_category(', '); ?></div>

        <h1 class="article__title"><?php the_title(); ?></h1>

        <p class="article__meta"><?php the_author(); ?> · <?php echo get_the_date(); ?></p>
    </div>

    <?php if (has_post_thumbnail()) : ?>
        <div class="article__cover">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>

    <div class="article__content">
        <?php the_content(); ?>
    </div>
</article>

<?php endwhile; ?>

<section class="article-cta">
    <div class="container article-cta__inner">
        <div>
            <h2 class="article-cta__title">Questions about your pet?</h2>
            <p class="article-cta__text">Book a visit and talk to our vets in person.</p>
        </div>

        <a href="<?php echo home_url('/contact/'); ?>" class="article-cta__button">Book appointment</a>
    </div>
</section>

<?php get_footer(); ?>
