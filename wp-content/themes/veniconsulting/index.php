<?php get_header(); ?>
<div class="alert alert-success border border-secondary text-center my-3 py-2 align-middle text-dark">
    Kontaktieren Sie uns jetzt für ein Erstgespräch und lassen Sie uns gemeinsam mehr Nachhaltigkeit in Ihr Unternehemen bringen!
</div>
<?php if (have_posts()) {
    while (have_posts())
        the_post();
    the_content();
}
?>
<?php get_footer(); ?>