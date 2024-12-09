<?php get_header(); ?>

<div class="container">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-md-6 mb-4"> <!-- Každý příspěvek zabírá polovinu řádku -->
                <div class="card h-100 d-flex flex-row"> <!-- "Karta" příspěvku -->
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
                        </a>
                    <?php endif; ?>

                    <div class="card-body">
                        <!-- Kategorie -->
                        <div class="post-category mb-2">
                            <?php foreach (get_the_category() as $category) : ?>
                                <span class="badge bg-primary"><?php echo $category->name; ?></span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Nadpis -->
                        <h5 class="card-title">
                            <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                <?php the_title(); ?>
                            </a>
                        </h5>

                        <!-- Úryvek -->
                        <p class="card-text"><?php echo get_the_excerpt(); ?></p>

                        <!-- Autor a datum -->
                        <p class="card-meta text-muted mb-0">
                            Autor: <?php the_author(); ?> | 
                            <time datetime="<?php echo get_the_date('c'); ?>">
                                <?php echo get_the_date(); ?>
                            </time>
                        </p>
                    </div>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p>Žádné příspěvky nebyly nalezeny.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>


<!--<?php
get_header();
?>

<main>
    <?php if (have_posts()) : ?>
        <div class="post-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article class="post-item">
                    <div class="post-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="post-meta">
                            <span class="post-author"><?php the_author(); ?></span> |
                            <span class="post-date"><?php the_date(); ?></span>
                        </div>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="read-more">Číst více...</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <nav class="pagination">
            <div class="nav-previous"><?php previous_posts_link('← Previous'); ?></div>
            <div class="nav-next"><?php next_posts_link('Next →'); ?></div>
        </nav>
    <?php else : ?>
        <p>No posts found. :(</p>
    <?php endif; ?>
</main>

<?php
get_footer();
?>

-->
