<?php require_once 'nedmin/netting/baglan.php';
require_once 'header.php';
?>
    
    <section class="home-slider owl-carousel">

    <?php require_once 'slider.php';?>

    </section>
    <!-- END slider -->

    <section class="section bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 pr-lg-5 mb-5 mb-md-0  element-animate">
            <div class="pr-lg-5">
              <h2 class="text-uppercase heading border-bottom mb-4 text-left">Sistre Cila, Parke cila, laminat parke cila, havuz sistre işlemlerinizi profesyonel usta kadromuz ile özenle yapmaktayız.</h2>
            </div>
          </div>
          <div class="col-md-6  element-animate">
            <img src="dimg/slider/228922606327939298391-16" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    
    <section class="section border-t">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">Referanslarımız</h2>
          </div>
        </div>



        <div class="row no-gutters">

            <?php

            $slidersor=$db->prepare("SELECT * FROM slider order by slider_sira ASC limit 6");
            $slidersor->execute();

            while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {

            ?>

          <div class="col-md-4 element-animate">

              <img src="<?php echo $slidercek['slider_resimyol']; ?>" alt="Image placeholder" class="img-fluid">

          </div>

            <?php } ?>

        </div>

          <div class="row justify-content-center mb-5 element-animate">
              <div class="col-md-8 text-center">
                  <h2 class="text-uppercase heading border-bottom mb-4"></h2>
                  <p><a href="referans.php" class="btn btn-primary">Tüm Referansları Gör</a></p>
              </div>
          </div>

      </div>
    </section>
    <!-- END section -->


    <section class="section">
      <div class="container">

        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-8 text-center">
            <h2 class="text-uppercase heading border-bottom mb-4">HİZMETLERİMİZ</h2>
          </div>
        </div>

        <div class="row mb-5">

          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
            <div class="media d-block media-feature text-center">
              <span class="flaticon-blueprint icon"></span>
              <div class="media-body">
                <h3 class="mt-0 text-black">Montaj ve Kurulum İşlemlerİmİz</h3>

                  <p>Yapı marketlerden, İkea, Koçtaş, Tekzen, Evidea, Evdema, Bauhaus, İstikbal, Bellona, Doğtaş veya internet üzerinden hazır aldığınız mobilyaların kurulumlarını hızlı ve hassasiyetle yapmaktayız.<br>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
            <div class="media d-block media-feature text-center">
              <span class="flaticon-building-1 icon"></span>
              <div class="media-body">
                <h3 class="mt-0 text-black">Tamirat</h3>
                <p>Masa Tamiri,Çekmece Tamiri,Kapı Tamiri,Aspiratör Dolap Kesimi,Laminat Tezgah Kesimi,Tv ünitesi Kesimi vb. bütün mobilyalarınızın tamir ve kesim işlemlerini profesyonel usta kadromuz ile özenle yapmaktayız.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 mb-3 element-animate">
            <div class="media d-block media-feature text-center">
              <span class="flaticon-crane icon"></span>
              <div class="media-body">
                <h3 class="mt-0 text-black">TV Duvar Montajı</h3>
                <p>Tablo,Ayna,Saat,Raf Duvar Montajı,Duvar Dolabı Montajı vb. bütün işlemlerinizi profesyonel usta kadromuz ile özenle yapmaktayız. </p>
              </div>
            </div>
          </div>



          
        </div>
        <!-- END row -->


        <div class="row justify-content-center element-animate">
            <div class="col-md-8 text-center">

                <h2 class="text-uppercase heading border-bottom mb-4"></h2>
                <p><a href="hizmetlerimiz.php" class="btn btn-primary">Tüm Hizmetleri Gör</a></p>

            </div>
        </div>
      </div>
    </section>
    <!-- END section -->



    <?php require_once 'footer.php'?>