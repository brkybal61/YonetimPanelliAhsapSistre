<?php require_once 'baglan.php';
if (session_status() == PHP_SESSION_NONE) {
    ob_start();
    session_start();
}


//Yönetim Paneline Giriş
if (isset($_POST['admingiris'])) {


    $kullaniciMail=$_POST['kullanici_mail'];
    $kullaniciPassword=md5($_POST['kullanici_password']);


    $kullanicisor= $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password ");
    $kullanicisor->execute(array(
        'mail' => $kullaniciMail,
        'password' => $kullaniciPassword,

    ));


    $say=$kullanicisor->rowCount();


    if ($say==1) {

        $_SESSION['kullanici_mail']=$kullaniciMail;
        header("Location:../production/index.php");
        exit;


    } else {

        header("Location:../production/login.php?durum=no");
        exit;
    }


}





if (isset($_POST['firmaayarkaydet'])) {

    $ayarkaydet=$db ->prepare("UPDATE ayar SET
        ayar_title=:ayar_title,
        ayar_description=:ayar_description,
        ayar_keywords=:ayar_keywords,
	    ayar_author=:ayar_author
	    WHERE ayar_id=0 ");

    $update=$ayarkaydet->execute(array(
        'ayar_title' => $_POST['ayar_title'],
        'ayar_description' => $_POST['ayar_description'],
        'ayar_keywords' => $_POST['ayar_keywords'],
        'ayar_author' => $_POST['ayar_author']
    ));

    if ($update) {

        header("Location:../production/firma-ayarlar?durum=ok");

    } else{

        header("Location:../production/firma-ayarlar?durum=no");

    }


}





if (isset($_POST['firmabilgikaydet'])) {

    $ayarkaydet=$db ->prepare("UPDATE ayar SET
        ayar_mail=:ayar_mail,
        ayar_tel=:ayar_tel,
        ayar_gsm=:ayar_gsm,
	    ayar_faks=:ayar_faks,
	    ayar_adres=:ayar_adres
	    WHERE ayar_id=0 ");

    $update=$ayarkaydet->execute(array(
        'ayar_mail' => $_POST['ayar_mail'],
        'ayar_tel' => $_POST['ayar_tel'],
        'ayar_gsm' => $_POST['ayar_gsm'],
        'ayar_faks' => $_POST['ayar_faks'],
        'ayar_adres' => $_POST['ayar_adres']
    ));

    if ($update) {

        header("Location:../production/firma-bilgi?durum=ok");

    } else{

        header("Location:../production/firma-bilgi?durum=no");

    }


}





if (isset($_POST['firmasosyalkaydet'])) {

    $ayarkaydet=$db ->prepare("UPDATE ayar SET
        ayar_facebook=:ayar_facebook,
        ayar_twitter=:ayar_twitter,
        ayar_instagram=:ayar_instagram
	    WHERE ayar_id=0 ");

    $update=$ayarkaydet->execute(array(
        'ayar_facebook' => $_POST['ayar_facebook'],
        'ayar_twitter' => $_POST['ayar_twitter'],
        'ayar_instagram' => $_POST['ayar_instagram']
        ));

    if ($update) {

        header("Location:../production/firma-sosyalmedya?durum=ok");

    } else{

        header("Location:../production/firma-sosyalmedya?durum=no");

    }


}




if (isset($_POST['hakkimizdakaydet'])) {


    $ayarkaydet=$db->prepare("UPDATE hakkimizda SET
		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_video=:hakkimizda_video,
		hakkimizda_vizyon=:hakkimizda_vizyon,
		hakkimizda_misyon=:hakkimizda_misyon
		WHERE hakkimizda_id=0");

    $update=$ayarkaydet->execute(array(
        'hakkimizda_baslik' => $_POST['hakkimizda_baslik'],
        'hakkimizda_icerik' => $_POST['hakkimizda_icerik'],
        'hakkimizda_video' => $_POST['hakkimizda_video'],
        'hakkimizda_vizyon' => $_POST['hakkimizda_vizyon'],
        'hakkimizda_misyon' => $_POST['hakkimizda_misyon']
    ));


    if ($update) {

        header("Location:../production/hakkimizda.php?durum=ok");

    } else {

        header("Location:../production/hakkimizda.php?durum=no");
    }

}

?>
