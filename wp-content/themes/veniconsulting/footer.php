    </div>
    </main>
    <footer class="bd-footer">
        <hr class="my-0" />
        <div class="py-2 bg-light">
            <div class="row row-md-1 row-lg-4 mx-0">
                <div class="col text-center">
                    <h5>Unsere Partner</h5>
                    <div class="footer-slot my-1 d-flex flex-column">
						<!-- Partner Bild 1 und 2 einfügen -->
                        <a class="my-2" href=<?php echo get_theme_mod('partner1_url') ?>><img style="width:80x;height:65px;" src=<?php echo get_theme_mod('partner1_image') ?>></a>
                        <a class="my-1" href=<?php echo get_theme_mod('partner2_url') ?>><img style="width:80x;height:65px;" src=<?php echo get_theme_mod('partner2_image') ?>></a>
                    </div>
                </div>

                <div class="col text-center">
                    <h5><a href="/">Home</a></h5>
                    <div class="footer-slot my-1 d-flex flex-column">
                        <a href="leistungen">Unsere Leistungen</a>
                        <a href="vision">Unsere Vision</a>
                        <a href="about">Über uns</a>
                    </div>
                    <div class="footer-slot my-3 d-flex flex-column">
                        <a href="glossar">Nachhaltigkeitsglossar</a>
                        <a href="blog">Nachhaltigkeitsblog</a>
                    </div>
                </div>

                <div class="col text-center">
                    <h5>Rechtliches</h5>
                    <div class="footer-slot my-1 d-flex flex-column">
                        <a href="impressum">Impressum</a>
                        <a href="datenschutz">Datenschutz</a>
                    </div>
                </div>

                <div class="col text-center">
                    <h5>Kontakt</h5>
                    <div class="footer-slot my-1 d-flex flex-column">
                        <div class="my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vh" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                                </path>
                            </svg>
                            Emil-Figge-Straße 38-44
                        </div>
                        <div class="my-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vh" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                                </path>
                            </svg>
                            <a href="mailto:kontakt@veni-consulting.de">kontakt@veni-consulting.de</a>
                        </div>
                        <div class="my-2">
                            <a href="mitglied">Join us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
    </body>

    </html>