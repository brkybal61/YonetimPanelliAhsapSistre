<?php
$title="Ahşap Bakım Referanslar";
require_once 'header.php';
?>
    <section class="inner-page">
        <div class="slider-item py-5" style="background-image: url('img/slider-1.jpg');">

            <div class="container">
                <div class="row slider-text align-items-center justify-content-center text-center">
                    <div class="col-md-7 col-sm-12 element-animate">
                        <h1 class="text-white">Referanslar</h1>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <div class="col md-8 text-center">
        <p class="mb-3 lead">İstanbul Ahşap Bakım – İstanbul Sistre – Marangoz </p>
        <p class="mb-3 lead">Mobilya Tamir – Mobilya Montaj – Mobilya Kurulum  </p>
        <p class="mb-3 lead">İstanbul Marangoz Ustası</p>
    </div>

    <section class="section">
      <div class="container">
          <div class="row no-gutters">

              <?php

              $slidersor=$db->prepare("SELECT * FROM slider");
              $slidersor->execute();

              while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {

                  ?>

                  <div class="col-md-4 element-animate">

                          <img src="<?php echo $slidercek['slider_resimyol']; ?>" alt="Image placeholder" class="img-fluid">

                  </div>

              <?php } ?>

          </div>
      </div>
    </section>
    




<?php require_once 'footer.php'?>