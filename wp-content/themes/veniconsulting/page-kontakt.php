<?php get_header(); ?>
        <div class="d-flex flex-row">
            <div class="col text-center d-flex flex-column">
                <div class="footer-slot my-1 text-start">
                    <div class="fs-5 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vh" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z">
                            </path>
                        </svg>
                        Emil-Figge-Straße 38-44
                    </div>
                    <div class="fs-5 my-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="2vw" height="2vh" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                            </path>
                        </svg>
                        kontakt@veni-consulting.de
                    </div>
                </div>
            </div>
            <div class="vr"></div>
            <div class="col">
                <?php if(have_posts()) {
                    while(have_posts())
                        the_post();
                        the_content();
                    }
                ?>
            </div>
        </div>
<?php get_footer(); ?>