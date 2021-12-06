<?php require_once 'baglan.php';
if (session_status() == PHP_SESSION_NONE) {
    ob_start();
    session_start();
}



if (isset($_POST['profilkaydet'])) {

    $kullanicikaydet=$db ->prepare("UPDATE kullanici SET
        kullanici_adsoyad=:kullanici_adsoyad,
        kullanici_mail=:kullanici_mail,
        kullanici_tel=:kullanici_tel
	    ");

    $update=$kullanicikaydet->execute(array(
        'kullanici_adsoyad' => $_POST['kullanici_adsoyad'],
        'kullanici_mail' => $_POST['kullanici_mail'],
        'kullanici_tel' => $_POST['kullanici_tel']
    ));

    if ($update) {

        header("Location:../production/profil?durum=ok");

    } else{

        header("Location:../production/profil?durum=no");

    }


}




if (isset($_POST['sifreguncelle'])) {


    $kullaniciEskipassword=htmlspecialchars($_POST['kullanici_eskipassword']);
    $kullaniciPasswordone=htmlspecialchars($_POST['kullanici_passwordone']);
    $kullaniciPasswordtwo=htmlspecialchars($_POST['kullanici_passwordtwo']);

    $kullanici_password=md5($kullaniciEskipassword);

    $kullanicisor=$db->prepare("SELECT * from kullanici where kullanici_password=:password");
    $kullanicisor->execute(array(
        'password' => $kullanici_password
    ));

    $say=$kullanicisor->rowCount();

    if ($say==0) {

        Header("Location:../production/profil?durum=eskisifrehata");
        exit;

    } else {


    if ($kullaniciPasswordone==$kullaniciPasswordtwo) {


        if (strlen($kullaniciPasswordone)>=6) {


            $sifre=md5($kullaniciPasswordone);


            $sifreguncelle=$db->prepare("UPDATE kullanici SET

				kullanici_password=:kullanici_password

				WHERE kullanici_id={$_POST['kullanici_id']}");


            $update=$sifreguncelle->execute(array(

                'kullanici_password' => $sifre


            ));

            if ($update) {

                Header("Location:../production/profil?durum=ok");

            } else {

                Header("Location:../production/profil?durum=hata");
            }

        } else {

            Header("Location:../production/profil?durum=eksiksifre");
            exit;

        }

    } else {

        Header("Location:../production/profil?durum=sifreleruyusmuyor");
        exit;

    }

}}
?>

