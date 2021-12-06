<?php $title='Ahşap Bakım İletişim';

require_once 'header.php';

$mesajsor=$db->prepare("SELECT * FROM mesaj");
$mesajsor->execute();

$mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC);
?>
    
    <section class="inner-page">
      <div class="slider-item py-5" style="background-image: url('img/slider-1.jpg');">
        
        <div class="container">
          <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
              <h1 class="text-white">İletişim</h1>
            </div>
          </div>
        </div>

      </div>
    </section>


    
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">

              <?php
              if (isset($_GET['durum'])) {

                  if ($_GET['durum']=="ok") {?>

                      <b style="color:green;">Mesajınız Gönderildi...</b>

                  <?php } elseif ($_GET['durum']=="no") {?>

                      <b style="color:red;">Mesajınız Gönderilemedi...</b>

                  <?php }

              }
              ?>

            <form action="nedmin/netting/mesaj.php" method="post">

              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="fname">Adınız</label>
                  <input type="text" name="mesaj_ad" placeholder="Adınızı Giriniz.." class="form-control form-control-lg" id="fname">
                </div>

                <div class="col-md-6 form-group">
                  <label for="lname">Soyadınız</label>
                  <input type="text" name="mesaj_soyad" placeholder="Soyadınızı Giriniz.." class="form-control form-control-lg" id="lname">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">Email</label>
                  <input type="email" name="mesaj_mail" placeholder="E-mail Adresinizi Giriniz.." id="email" class="form-control form-control-lg">
                </div>
              </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="phone">Telefon</label>
                        <input type="text" name="mesaj_tel" placeholder="Telefon Numaranızı Giriniz.." class="form-control form-control-lg">
                    </div>
                </div>

              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Mesajınızı Yazınız</label>
                  <textarea name="mesaj_detay" id="message" placeholder="Mesajınız Giriniz.." class="form-control form-control-lg" cols="30" rows="8"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" name="mesajgonder" value="Mesaj Gönder" class="btn btn-primary btn-lg btn-block">
                </div>
              </div>

            </form>
          </div>


          <div class="col-md-1"></div>
          <div class="col-md-4">
            <h5 class="text-uppercase mb-3">ADRES</h5>
            <p class="mb-5"><?php echo $ayarcek['ayar_adres']; ?> <br> <?php echo $ayarcek['ayar_ilce']; ?> <br> <?php echo $ayarcek['ayar_il']; ?></p>
            
            <h5 class="text-uppercase mb-3">EMAİL</h5>
              <p class="mb-5"><a href="mailto:"><?php echo $ayarcek['ayar_mail'] ?></a></p>

            <h5 class="text-uppercase mb-3">BİZİ ARAYIN</h5>
            <p class="mb-5">Tel: <?php echo $ayarcek['ayar_tel']; ?> <br> GSM: <?php echo $ayarcek['ayar_gsm']; ?> <br> Faks: <?php echo $ayarcek['ayar_faks']; ?></p>
          </div>
        </div>
      </div>


    </section>




    <?php require_once 'footer.php'?>