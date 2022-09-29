<!-- Footer -->

<footer class="text-center mt-5 pt-3 border-top text-lg-start">
    <section class="pb-1 p-3">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
                    <a href="https://www.universite-paris-saclay.fr/" target="_blank">
                        <img class="img-fluid"
                            src="<?php echo(get_template_directory_uri() . '/assets/logo/logo-ups-white_1.svg') ?>"
                            alt="Logo Université PARIS-SACLAY" width="190">
                    </a>
                    <p class="mt-5">3 rue Joliot Curie
                        Bâtiment Breguet
                        91190 Gif-sur-Yvette
                    </p>
                    <p>Standard : 01.69.15.67.50</p>
                </div>

                <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 titre-footer">
                        Confidentialité
                    </h6>
                    <p>
                        <a href="https://www.universite-paris-saclay.fr/mentions-legales" class="text-reset"
                            target="_blank">Mentions légales</a>
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4 titre-footer">
                        Nos réseaux sociaux
                    </h6>
                    <a href="https://www.facebook.com/UParisSaclay" target="_blank"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/school/universit%C3%A9-paris-saclay/" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.youtube.com/user/UParisSaclay" target="_blank"><i
                            class="fa-brands fa-youtube"></i></a>
                    <a href="https://twitter.com/UnivParisSaclay" target="_blank"><i
                            class="fa-brands fa-square-twitter"></i></a>
                    <a href="https://www.instagram.com/universite_paris_saclay/" target="_blank"><i
                            class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col">
                <p class="texte-univ mb-5">L'Université Paris-Saclay est membre des réseaux
                    <a href="https://www.leru.org/" target="_blank" class="text-white text-decoration-underline">
                        LERU</a>,
                    <a href="https://www.cesaer.org/" target="_blank"
                        class="text-white text-decoration-underline">CESAER</a> et
                    <a href="https://eua.eu/" target="_blank" class="text-white text-decoration-underline">EUA</a>
                </p>
            </div>
        </div>
    </div>
    <div class="text-center p-3 text-white" style="background-color: #1b1b1b;">
        Tous droits réservés Université Paris-Saclay <?= date('Y'); ?> || Designed by:
        <a class="text-reset fw-bold" href="https://paradisiak.com/" target="_blank">Paradisiak</a>
    </div>
</footer>


<?php
wp_footer()
                            ?>

</body>

</html>