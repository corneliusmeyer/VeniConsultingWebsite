<!-- Diese Seite beschreibt die Detailansicht eines Blogeintrags! -->

<?php get_header(); ?>
    <a href="/blog" class="btn btn-sm btn-outline-secondary my-3">Zurück zur Übersicht</a>
        <?php if (have_posts()) : ?>
			<!-- Den Artikel suchen -->
            <?php while (have_posts()) : the_post(); ?>
                <div class="blog-post my-4">
                    <h2 class="blog-post-title my-4">
                        <?php the_title(); ?>
                    </h2>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-img my-4">
							<!-- Das Thumbnail anzeigen -->
                            <?php the_post_thumbnail(); ?>
                        </div>
                    <?php endif; ?>
					<!-- Den Inhalt des Artikels einfügen -->
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
<?php get_footer(); ?>