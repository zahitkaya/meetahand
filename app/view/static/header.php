
<!DOCTYPE html>
<html>
<head>
	<title>başlık</title>

    <link rel="stylesheet" href=" <?= asset_url('styles/style.css'); ?>"  > <!-- CSS Ekleme -->
</head>
    
<body style="background-image: url(<?php echo asset_url('images/fenerbahce.pn') ?>)"> <!-- Arka plan resmi -->

<ul> 
<li class="anasayfa-menu"><a href="<?php echo url ?>">anasayfaa </a> </li>
<li class="anasayfa-menu"> <a href="konu"> konu anlatım </a> </li>
<li class="anasayfa-menu"><a href="iletisim"> iletişimm </a> </li>
</ul>

<div class="anasayfa" style = '<?php if($_SERVER['REQUEST_URI']<>"/meetahand/") echo "display:none" ?>' > <!-- eğer current url /meetahand/ değilse gösterme -->
<div class="anasayfa-bolum1">
<p> meetahand.com</p>
<p>Öğrencilerin dostu</p>
<a href="#">Hakkımızda</a>
<a href="#">Aramıza katıl </a>
</div>
</div> <!-- anasayfa divi sonu -->
