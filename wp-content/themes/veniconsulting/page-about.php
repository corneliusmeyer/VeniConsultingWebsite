<?php get_header(); ?>
<div class="alert alert-success border border-secondary text-center my-3 py-1 align-middle text-dark">
    <?php echo get_theme_mod('banner_2') ?>
</div>
<?php if (have_posts()) {
    while (have_posts())
        the_post();
    the_content();
}
?>
<?php get_footer(); ?>