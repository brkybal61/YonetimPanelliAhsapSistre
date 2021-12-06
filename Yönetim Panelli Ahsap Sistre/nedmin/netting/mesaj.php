<?php require_once 'baglan.php';
if (session_status() == PHP_SESSION_NONE) {
    ob_start();
    session_start();
}


if (isset($_POST['mesajgonder'])) {

    $mesajkaydet=$db->prepare("INSERT into mesaj set

        mesaj_ad=:mesaj_ad,
        mesaj_soyad=:mesaj_soyad,
        mesaj_mail=:mesaj_mail,
        mesaj_tel=:mesaj_tel,
        mesaj_detay=:mesaj_detay
");

    $insert=$mesajkaydet->execute(array(
        'mesaj_ad'=>$_POST['mesaj_ad'],
        'mesaj_soyad'=>$_POST['mesaj_soyad'],
        'mesaj_mail'=>$_POST['mesaj_mail'],
        'mesaj_tel'=>$_POST['mesaj_tel'],
        'mesaj_detay'=>$_POST['mesaj_detay']
    ));

    if ($insert) {

        header("Location:../../iletisim.php?durum=ok");

    }else{

        header("Location:../../iletisim.php?durum=no");

    }
}



if ($_GET['mesajsil']=="ok") {

    $sil=$db->prepare("DELETE from mesaj where mesaj_id=:id");
    $kontrol=$sil->execute(array(
        'id' => $_GET['mesaj_id']
    ));


    if ($kontrol) {


        header("location:../production/mesaj.php?sil=ok");


    } else {

        header("location:../production/mesaj.php?sil=no");

    }


}
?>