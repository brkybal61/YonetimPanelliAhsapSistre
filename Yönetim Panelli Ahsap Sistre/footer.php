<section class="container cta-overlap">
    <div class="text d-flex">
        <h2 class="h3">Bizden Almak İstediğiniz Hizmet İçin Teklif Alın</h2>
        <div class="ml-auto btn-wrap">
            <a href="iletisim" class="btn-cta btn btn-outline-white">Teklif Alın</a>
        </div>
    </div>
</section>
<!-- END section -->

<footer class="site-footer bg-dark" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-3">
                <ul class="list-unstyled footer-link">
                    <li><span class="mr-3 d-block">Adres:</span><span class="text-white"><?php echo $ayarcek['ayar_adres']; ?></span></li>
                    <li><span class="mr-3 d-block">Telefon:</span><span class="text-white"><?php echo $ayarcek['ayar_tel']; ?></span></li>
                    <li><span class="mr-3 d-block">Faks:</span><span class="text-white"><?php echo $ayarcek['ayar_faks']; ?></span></li>
                    <li><span class="mr-3 d-block">E-mail:</span><span class="text-white"><?php echo $ayarcek['ayar_mail']; ?></span></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="text-white">Hızlı Linkler</h3>
                <ul class="list-unstyled footer-link">
                    <li><a href="index">Anasayfa</a></li>
                    <li><a href="hakkimizda">Hakkımızda</a></li>
                    <li><a href="hizmetlerimiz">Hizmetlerimiz</a></li>
                    <li><a href="referaslar">Referanslar</a></li>
                    <li><a href="iletisim">İletişim</a></li>

                </ul>
            </div>
            <div class="col-md-3">
                <h3 class="text-white">Social</h3>
                <ul class="list-unstyled footer-link d-flex footer-social">
                    <li><a target="_blank" href="http://<?php echo $ayarcek['ayar_twitter']; ?>" class="p-2"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="http://<?php echo $ayarcek['ayar_facebook']; ?>" class="p-2"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="http://<?php echo $ayarcek['ayar_instagram']; ?>" class="p-2"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
