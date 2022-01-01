<?php get_header(); ?>
<main>
    <div class="container">
    <a href="https://veni-consulting.de/?page_id=25" class="btn btn-sm btn-outline-secondary my-3">Zurück zur Übersicht</a>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="blog-post my-4">
                    <h2 class="blog-post-title my-4">
                        <?php the_title(); ?>
                    </h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-img my-4">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>