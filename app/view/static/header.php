<!DOCTYPE html>
<html>

<head>
    <title>başlık</title>

    <link rel="stylesheet" href=" <?= asset_url('styles/style.css'); ?>"> <!-- CSS Ekleme -->
</head>

<body style="background-image: url(<?php echo asset_url('images/fenerbahce.pn') ?>)">
    <!-- Arka plan resmi -->

    <ul>
        <li class="anasayfa_menu"><a href="<?php echo url ?>">anasayfaa </a> </li>
        <li class="anasayfa_menu"> <a href="konu"> konu anlatım </a> </li>
        <li class="anasayfa_menu"><a href="iletisim"> iletişimm </a> </li>
    </ul>

    <div class="anasayfa" style='<?php if ($_SERVER['REQUEST_URI'] <> "/meetahand/") echo "display:none" ?>'>
        <!-- eğer current url /meetahand/ değilse gösterme -->
        <div class="anasayfa_bolum1">
            <div class="anasayfa_bolum1_icerik">
                <div class="anasayfa_bolum1_icerik_bilgi" align="center">
                    <p> meetahand.com</p>
                    <p>Öğrencilerin dostu</p>
                    <a href="#">Hakkımızda</a>
                    <a href="#">Aramıza katıl </a>
                </div>
                <div class="anasayfa_bolum1_icerik_textarea" align="center">
                    <form action="" method="POST">
                        <textarea name="title" id="soru_textarea" cols="30" rows="10">
                         Sormak istediğiniz soruyu buraya yazın. </textarea>
                    </form>

                </div>

            </div><!-- anasayfa_bolum1_icerik divi sonu -->

        </div><!-- anasayfa_bolum1 divi sonu -->
    </div> <!-- anasayfa divi sonu -->
    <!-- shift+alt+f -->