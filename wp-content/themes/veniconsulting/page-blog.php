<?php get_header(); ?>
        <span>
            Kennen Sie den IPCC Report? Oder wissen Sie was es mit dem neuen Lieferkettengesetz auf sich hat? Was CSRD-Richtlinie mit sich bringt? Hier wird all dies neben weiteren aktuellen Themen rund um die Nachhaltigkeit beleuchtet. Schauen Sie regelmäßig vorbei, um keine News zu verpassen.
        </span>
        <?php
        $args = array(
            'post_type'         => 'post',
            'posts_per_page'    => 10
        );
        $the_query = new WP_Query($args); ?>
        <?php if ($the_query->have_posts()) : ?>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 my-4">
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <?php if(has_post_thumbnail()) : ?>
                                <div class="bd-placeholder-img card-img-top m-1" >
                                    <?php the_post_thumbnail() ?>
                                </div>
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="blog-post-title"><?php the_title(); ?></h5>
                                <small class="text-muted"><?php the_author(); ?> / <?php the_date(); ?></small>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a class="btn btn-sm btn-outline-secondary" href="<?php the_permalink(); ?>">Erfahre mehr...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p class="text-danger my-5"><b>Es wurde noch nichts gepostet. Kommen Sie bitte später nochmal wieder.</b></p>
        <?php endif; ?>
<?php get_footer(); ?>