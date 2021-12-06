
<?php

$slidersor=$db->prepare("SELECT * FROM slider order by slider_id ASC limit 3");
$slidersor->execute();

while($slidercek=$slidersor->fetch(PDO::FETCH_ASSOC)) {

?>

<div class="slider-item" style="background-image: url(<?php echo $slidercek['slider_resimyol']; ?>);">

    <div class="container">
        <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-md-7 col-sm-12 element-animate">
                <h1 class="mb-4"> <?php echo $slidercek['slider_ad']; ?></h1>
                <p class="mb-0"><a href="referans.php" class="btn btn-primary">Şimdi İnceleyin</a></p>

            </div>
        </div>
    </div>

</div>

<?php } ?>