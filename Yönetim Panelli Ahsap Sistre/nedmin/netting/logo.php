<?php require_once 'baglan.php';
if (session_status() == PHP_SESSION_NONE) {
    ob_start();
    session_start();
}

if (isset($_POST['logoduzenle'])) {



    $uploads_dir = '../../dimg';

    @$tmp_name = $_FILES['ayar_logo']["tmp_name"];
    @$name = $_FILES['ayar_logo']["name"];

    $benzersizsayi4=rand(20000,32000);
    $refimgyol=substr($uploads_dir, 6)."/".$benzersizsayi4.$name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


    $duzenle=$db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");
    $update=$duzenle->execute(array(
        'logo' => $refimgyol
    ));



    if ($update) {

        $resimsilunlink=$_POST['eski_yol'];
        unlink("../../$resimsilunlink");

        Header("Location:../production/firma-ayarlar.php?durum=ok");

    } else {

        Header("Location:../production/firma-ayarlar.php?durum=no");
    }

}
?>