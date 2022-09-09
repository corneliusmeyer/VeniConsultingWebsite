<!-- Diese Seite beschreibt jede neu hinzugefügte Seite,
die nicht genauer über Programmierung erstellt werden muss.
Hierbei handelt es sich nicht um die Landingpage!!!!
Soll eine Seite genauer angepasst werden, so muss
eine eigene Date mit page-name.php erstellt werden,
wobei "name" ein platzhalter ist -->


<?php get_header(); ?>
        <?php if (have_posts()) {
            while (have_posts())
                the_post();
            the_content();
        }
        ?>
<?php get_footer(); ?>