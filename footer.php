<!-- footer
        ================================================== -->


    <footer>
    <?php if(is_home()):?>
        <div class="container">
            <div class="row" id="quick-links">
                <div class="col-md-3 col-sm-3">
                    <div class="col col-1">
                        <h4>&Agrave; propos</h4>
                        <p>Vous souhaitez conna&icirc;tre notre histoire? D&eacute;couvrir qui se cache derri&egrave;re <q>Cr&eacute;ations la F&eacute;e</q>?</p>
                        <a href="a-propos">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="col col-2">
                        <h4>Nos produits</h4>
                        <p>Faire-part, billets d'invitation, papeterie ethnique, accessoires et objets pour la maison...</p>
                        <a href="nos-produits">D&eacute;couvrir</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="col col-3">
                        <h4>Actualit&eacute;s &amp; Nouveaut&eacute;s</h4>
                        <p>Ateliers cr&eacute;atifs, expositions, nouvelle collection, soldes... D&eacute;couvrez tout ce qui fait notre actualit&eacute;.</p>
                        <a href="nos-produits">En savoir plus</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3">
                    <div class="col col-4">
                        <h4>Commander</h4>
                        <p>Un produit vous plait? Vous souhaitez le personnaliser? Posez nous vos questions dans ce formulaire.</p>
                        <a href="#">Contactez-nous</a>
                    </div>
                </div>
            </div>
            <p class="copyright">
                &copy; Copyright 2016. Les Cr&eacute;ations La F&eacute;e by <a href="http://slenhtech-corp.com" target="_blank">SlenhTech Corp</a>. All rights reserved.
            </p>
        </div>
        <?php else:;?>
        <div class="container footer-alt">
            <div class="row footer-content">
                <div class="col-sm-3">
                    <h4>Liens rapides</h4>
                    <ul class="list-unstyled">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="a-propos">&Agrave; propos</a></li>
                        <li><a href="#">Nos produits</a></li>
                        <li><a href="#">Actualit&eacute;s &amp; Nouveaut&eacute;s</a></li>
                        <li><a href="nous-contacter">Contacts</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4>Newsletter</h4>
                    <form action="" id="newsletter-form" role="form" method="get">
                        <label for="newsletter">Inscrivez-vous &agrave; notre newsletter</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="newsletter" required placeholder="Addresse email">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">@</button>
                        </span>
                        </div>
                    </form>
                </div>
            </div>
            <!--                <h4>Nos produits</h4>-->
            <div class="row">
                <div class="col-sm-3">
                    <h4>Carterie</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Mariage & Naissance</a></li>
                        <li><a href="#">Carterie d'entreprises</a></li>
                        <li><a href="#">Cartes ethniques</a></li>
                        <li><a href="#">F&ecirc;tes diverses</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Papeterie</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">carnets &amp; Cahiers</a></li>

                        <li><a href="#">Conf&eacute;renciers &amp; Kits r&eacute;union</a></li>
                        <li><a href="#">marque-pages &amp; prot&egrave;ges cahiers</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <h4>Accessoires</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">D&eacute;co</a></li>
                        <li><a href="#">&Eacute;tuis &amp; pochettes</a></li>
                        <li><a href="#">Housses de tablettes &amp; d'ordi</a></li>
                        <li><a href="#">Trousses de toilette</a></li>
                        <li><a href="#">Porte-cl&eacute;s &amp; bijoux</a></li>
                    </ul>
                </div>
            </div>
            <p class="copyright">
                &copy; Copyright 2016. Cr&eacute;ations La F&eacute;e by <a href="http://slenhtech-corp.com" target="_blank">SlenhTech Corp</a>. All rights reserved.
            </p>
        </div>
    <?php endif;?>
    </footer>
<!-- End footer -->
</div>
<!-- End Container -->
<?php wp_footer();?>
</body>
</html>