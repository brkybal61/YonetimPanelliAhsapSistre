<?php require_once 'nedmin/netting/baglan.php';


$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
    'id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="tr">
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-9">
<head>
    <title>

        <?php if (empty($title)) {


            echo $ayarcek['ayar_title'];


        } else {

            echo $title;
        }

        ?>

    </title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $ayarcek['ayar_description'] ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords'] ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author'] ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=K2D:400,700|Niramit:300,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">



</head>
<body>

<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+90 (554) 268 75 95", // WhatsApp number
            call_to_action: "Whatsapp Mesaj Gönder", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->

<header role="banner">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand position-absolute" href="index.php">Ahşap Bakım</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse position-relative" id="navbarsExample05">
                <ul class="navbar-nav mx-auto pl-lg-5 pl-0 d-flex align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Anasayfa</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="hakkimizda">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hizmetlerimiz">Hizmetlerimiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="referans">Referanslar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim">İletişim</a>
                    </li>
                    <li class="nav-item cta-btn2">
                        <a class="nav-link" href="iletisim">
                            <span class="d-inline-block px-4 py-2 border">Teklif Alın</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END header -->
