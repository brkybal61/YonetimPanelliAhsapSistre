<?php
$title='Ahşap Bakım Hakkımızda';

require_once 'header.php';


$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array(
    'id' => 0
));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>

<section class="inner-page">
    <div class="slider-item py-5" style="background-image: url('img/slider-2.jpg');">

        <div class="container">
            <div class="row slider-text align-items-center justify-content-center text-center">
                <div class="col-md-7 col-sm-12 element-animate">
                    <h1 class="text-white">Hakkımızda</h1>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section">
    <div class="container">


        <div class="row mb-5">
            <div class="col-md-6 order-lg-3 mb-5">
                <img src="dimg/slider/228922606327939298391-16" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-md-1 order-lg-2"></div>
            <div class="col-md-5 order-lg-1">
                <h2 class="text-uppercase heading mb-4">ŞİRKET HAKKINDA</h2>
                <p class="mb-3"><?php echo $hakkimizdacek['hakkimizda_icerik'] ?></p>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-md-6 order-lg-1 mb-5">
                <img src="dimg/slider/234542555923950210391-3" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-md-1 order-lg-2"></div>
            <div class="col-md-5 order-lg-3">
                <h2 class="text-uppercase heading mb-4">VİZYON</h2>
                <p class="mb-3"><?php echo $hakkimizdacek['hakkimizda_vizyon']; ?></p>
            </div>
        </div>


        <div class="row mb-5">
            <div class="col-md-6 order-lg-3 mb-5">
                <img src="dimg/slider/295732683023696292771-6" alt="Image placeholder" class="img-fluid">
            </div>
            <div class="col-md-1 order-lg-2"></div>
            <div class="col-md-5 order-lg-1">
                <h2 class="text-uppercase heading mb-4">MİSYON</h2>
                <p class="mb-3"><?php echo $hakkimizdacek['hakkimizda_misyon'] ?></p>
            </div>
        </div>


    </div>
</section>




<?php require_once 'footer.php'?>