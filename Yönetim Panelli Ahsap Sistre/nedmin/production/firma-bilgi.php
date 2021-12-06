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
            <h2>Firma Bilgi Formu<small>

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


            <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Firma Mail <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Firma Telefon<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_tel" value="<?php echo $ayarcek['ayar_tel'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Firma GSM <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_gsm" value="<?php echo $ayarcek['ayar_gsm'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>

              </div><div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Firma Faks <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_faks" value="<?php echo $ayarcek['ayar_faks'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>

              </div><div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Firma Adres <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="first-name" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>



              <div class="ln_solid"></div>
              <div class="form-group">
                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                  <button type="submit" name="firmabilgikaydet" class="btn btn-success">Kaydet</button>
                </div>
              </div>

            </form>



          </div>
        </div>
      </div>
    </div>



    <hr>
    <hr>
    <hr>



  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
