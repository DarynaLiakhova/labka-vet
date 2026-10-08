<?php get_header(); ?>

<section class="page-hero">
    <div class="container">
        <span class="page-hero__label">BLOG</span>
        <h1 class="page-hero__title">Advice from our vets</h1>
        <p class="page-hero__text">Short, practical articles on health, food and everyday care for dogs and cats.</p>
    </div>
</section>

<section class="blog-page">
    <div class="container">

        <?php if (have_posts()) : ?>

            <div class="blog_grid">
                <?php while (have_posts()) : the_post(); ?>

                    <article class="grid__news">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium_large'); ?>
                        </a>

                        <div class="news__meta">
                            <span><?php the_category(', '); ?></span>
                            <span><?php echo get_the_date(); ?></span>
                        </div>

                        <h2 class="blog-page__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p><?php echo get_the_excerpt(); ?></p>

                        <a href="<?php the_permalink(); ?>" class="news__link">Read article →</a>
                    </article>

                <?php endwhile; ?>
            </div>

            <div class="blog-page__pagination">
                <?php the_posts_pagination([
                    'prev_text' => '← Previous',
                    'next_text' => 'Next →',
                ]); ?>
            </div>

        <?php else : ?>

            <p>No articles yet.</p>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
