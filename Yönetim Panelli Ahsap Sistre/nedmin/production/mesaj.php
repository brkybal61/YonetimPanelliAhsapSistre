<?php

require_once 'header.php';

$mesajsor=$db->prepare("SELECT * FROM mesaj");
$mesajsor->execute();

?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Mesaj Listeleme<small>

              <?php 
              if (isset($_GET['durum'])) {

                  if ($_GET['durum']=="ok") {?>

                      <b style="color:green;">İşlem Başarılı...</b>

                  <?php } elseif ($_GET['durum']=="no") {?>

                      <b style="color:red;">İşlem Başarısız...</b>

                  <?php }

              } ?>


            </small></h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Mesaj Tarih</th>
                  <th>Ad Soyad</th>
                  <th>Mail Adresi</th>
                  <th>Telefon</th>
                  <th>Mesaj İçerik</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($mesajcek=$mesajsor->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                  <td><?php echo $mesajcek['mesaj_zaman'] ?></td>
                  <td><?php echo $mesajcek['mesaj_ad']." ".$mesajcek['mesaj_soyad'] ?></td>
                  <td><?php echo $mesajcek['mesaj_mail'] ?></td>
                  <td><?php echo $mesajcek['mesaj_tel'] ?></td>
                  <td><?php echo $mesajcek['mesaj_detay'] ?></td>
                  <td><center><a href="../netting/mesaj.php?mesaj_id=<?php echo $mesajcek['mesaj_id']; ?>&mesajsil=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                </tr>



                <?php  }

                ?>


              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php require_once 'footer.php'; ?>
