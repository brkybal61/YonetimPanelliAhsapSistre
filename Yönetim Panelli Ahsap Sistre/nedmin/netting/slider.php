<?php require_once 'baglan.php';
if (session_status() == PHP_SESSION_NONE) {
    ob_start();
    session_start();
}


if (isset($_POST['sliderkaydet'])) {


    $uploads_dir = '../../dimg/slider';
    @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
    @$name = $_FILES['slider_resimyol']["name"];
    //resmin isminin benzersiz olması
    $benzersizsayi1=rand(20000,32000);
    $benzersizsayi2=rand(20000,32000);
    $benzersizsayi3=rand(20000,32000);
    $benzersizsayi4=rand(20000,32000);
    $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
    $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");



    $kaydet=$db->prepare("INSERT INTO slider SET
		slider_ad=:slider_ad,
		slider_sira=:slider_sira,
		slider_resimyol=:slider_resimyol
		");
    $insert=$kaydet->execute(array(
        'slider_ad' => $_POST['slider_ad'],
        'slider_sira' => $_POST['slider_sira'],
        'slider_resimyol' => $refimgyol
    ));

    if ($insert) {

        Header("Location:../production/slider.php?durum=ok");

    } else {

        Header("Location:../production/slider.php?durum=no");
    }




}



// Slider Düzenleme Başla


if (isset($_POST['sliderduzenle'])) {


    if($_FILES['slider_resimyol']["size"] > 0)  {


        $uploads_dir = '../../dimg/slider';
        @$tmp_name = $_FILES['slider_resimyol']["tmp_name"];
        @$name = $_FILES['slider_resimyol']["name"];
        $benzersizsayi1=rand(20000,32000);
        $benzersizsayi2=rand(20000,32000);
        $benzersizsayi3=rand(20000,32000);
        $benzersizsayi4=rand(20000,32000);
        $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;
        $refimgyol=substr($uploads_dir, 6)."/".$benzersizad.$name;
        @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

        $duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_sira=:sira,
			slider_durum=:durum,
			slider_resimyol=:resimyol	
			WHERE slider_id={$_POST['slider_id']}");
        $update=$duzenle->execute(array(
            'ad' => $_POST['slider_ad'],
            'sira' => $_POST['slider_sira'],
            'durum' => $_POST['slider_durum'],
            'resimyol' => $refimgyol
        ));


        $slider_id=$_POST['slider_id'];

        if ($update) {

            $resimsilunlink=$_POST['slider_resimyol'];
            unlink("../../$resimsilunlink");

            Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

        } else {

            Header("Location:../production/slider-duzenle.php?durum=no");
        }



    } else {

        $duzenle=$db->prepare("UPDATE slider SET
			slider_ad=:ad,
			slider_sira=:sira,
			slider_durum=:durum		
			WHERE slider_id={$_POST['slider_id']}");
        $update=$duzenle->execute(array(
            'ad' => $_POST['slider_ad'],
            'sira' => $_POST['slider_sira'],
            'durum' => $_POST['slider_durum']
        ));

        $slider_id=$_POST['slider_id'];

        if ($update) {

            Header("Location:../production/slider-duzenle.php?slider_id=$slider_id&durum=ok");

        } else {

            Header("Location:../production/slider-duzenle.php?durum=no");
        }
    }

}


// Slider Düzenleme Bitiş

if ($_GET['slidersil']=="ok") {

    $sil=$db->prepare("DELETE from slider where slider_id=:slider_id");
    $kontrol=$sil->execute(array(
        'slider_id' => $_GET['slider_id']
    ));

    if ($kontrol) {

        $resimsilunlink=$_GET['slider_resimyol'];
        unlink("../../$resimsilunlink");

        Header("Location:../production/slider.php?durum=ok");

    } else {

        Header("Location:../production/slider.php?durum=no");
    }

}
?>