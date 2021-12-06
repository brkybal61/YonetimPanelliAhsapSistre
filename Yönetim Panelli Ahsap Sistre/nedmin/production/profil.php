<?php 

include 'header.php'; 


?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Profil Bilgilerim<small>

              <?php 
              if (isset($_GET['durum'])) {

                  if ($_GET['durum']=="ok") {?>

                      <b style="color:green;">İşlem Başarılı...</b>

                  <?php } elseif ($_GET['durum']=="no") {?>

                      <b style="color:red;">İşlem Başarısız...</b>

                  <?php }
              }

              ?>
            </small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />


            <form action="../netting/profil.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ad Soyad<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail Adresi<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_mail" value="<?php echo $kullanicicek['kullanici_mail'] ?>" disabled="" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="kullanici_tel" value="<?php echo $kullanicicek['kullanici_tel'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>


              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="profilkaydet" class="btn btn-success">Kaydet</button>
                </div>
              </div>

            </form>

          </div>


            <div class="x_title">
                <h2>Şifre Güncelleme<small>

                        <?php
                        if (isset($_GET['durum'])) {

                            if ($_GET['durum']=="hata") {?>

                                <b style="color:red;">İşlem Başarısız...</b>

                            <?php } else if ($_GET['durum']=="ok") {?>

                                <b style="color:green;">İşlem Başarılı...</b>

                            <?php }  else if ($_GET['durum']=="eskisifrehata") {?>

                                <b style="color:red;">Eski Şifreniz Hatalı...</b>

                            <?php } else if ($_GET['durum']=="sifreleruyusmuyor") {?>

                                <b style="color:red;">Şifreler Uyuşmuyor...</b>


                            <?php } else if ($_GET['durum']=="eksiksifre") {?>

                                <b style="color:red;">Şifreniz En Az 6 Karakter Olmalı!</b>

                            <?php }

                        }

                        ?>
                    </small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />


                <form action="../netting/profil.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Eski Şifre<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="first-name" name="kullanici_eskipassword" placeholder="Eski şifrenizi giriniz..." required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şifre<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="first-name" name="kullanici_passwordone" placeholder="Yeni şifrenizi giriniz..." required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Şifre(Tekrar)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="password" id="first-name" name="kullanici_passwordtwo" placeholder="Yeni şifrenizi tekrar giriniz..."  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" name="sifreguncelle" class="btn btn-success">Güncelle</button>
                        </div>
                    </div>

                </form>

            </div>




        </div>
      </div>
    </div>


  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
