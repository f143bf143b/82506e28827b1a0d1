<?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>


<div id="photo_main_page">



				<div  style="clear: both;font-weight: bold;padding:14px 14px 11px;text-align: center;">Фото</div>	
<style type="text/css">
.nav_first__item{color:#000;}
</style>

<div class="nav_first" style="text-align: center;padding:14px 0 0px;border-bottom: 1px solid #DDD;">
	<style type="text/css">
	.nav_first__item{padding:0px 9px 11px;display: inline-block;}
	</style>

<a href="/photo" class="nav_first__item" style="color:blue;border-bottom:1px solid blue;">Мои фото</a>
<span style="padding:0 14px;">|</span>
<a href="/photo/upload" class="nav_first__item">+ Загрузить фото</a>


</div>

<style type="text/css">
.photo_block__image_wrap{margin:9px}
.photo_block__image{width:100%;height:34vh; border-radius:9px;}

.biggy_photo{background-size: cover;background-position: center;}

.photo_block{
    width: 26%;
    display: inline-block;
    margin-right: -17px;}

    .nav_first{}


    .photo_block__title{padding:6px 0;margin: 5px 0 9px;text-align: center;height:77px;overflow: hidden;line-height:25px;}

.nav_first__item{color:#000;}

.photo_block__image_wrap{padding:3px}

.photo_block__image{}

</style>




<style type="text/css">
.photo__image{display: inline-block; width: 25%;margin-right:-3px;
	height:34vh;background-image: url('/image/bmw_csl_hommage_vid_sboku_105056_1680x1050.jpg');background-position: center;background-size: cover;}
</style>


<div style="text-align: center;
    margin-right: -2%;width: 99%;">







<div class="photo_block" style="position: relative;">

	<div style="position:absolute;top: 0;left:0;right:0;bottom:0;background-color:#000;opacity: .7;z-index: 9;color: #FFF;border-radius:14px;">
		<div style="margin-top: 134px;z-index: 9;">
<div style="font-weight: bold;font-size:1.4em;margin-bottom:17px;">Фото удалено</div>

		<div><button style="border:1px solid #FFF;background-color:transparent;color: #FFF;padding:3px 11px;border-radius:17px;font-size: .9em;cursor: pointer;">Восстановить</button></div>

		</div>

		

	</div>
	<div style="position: absolute;background-color: #000;color: #FFf;padding:6px 9px;margin:11px;right:0;border-radius:7px;	cursor: pointer;">удалить</div>
<div class="photo_block__image_wrap">
<div class="photo_block__image biggy_photo" style="background-image: url('/image/bmw_csl_hommage_vid_sboku_105056_1680x1050.jpg');">
</div>





<div class="photo_block__title">



Там где рассвет, заката нет
Лучами солнца передам привет
Там где нас нет, печали свет
А мне бы лишь услышать твой голос в ответ

</div>

</div>
</div>


































<?php
for($i=0;$i<7;$i++) {

?>

<div class="photo_block" style="position: relative;">
	<div style="position: absolute;background-color: #000;color: #FFf;padding:6px 9px;margin:11px;right:0;border-radius:7px;	cursor: pointer;">удалить</div>
<div class="photo_block__image_wrap">
<div class="photo_block__image biggy_photo" style="background-image: url('/image/bmw_csl_hommage_vid_sboku_105056_1680x1050.jpg');">
</div>





<div class="photo_block__title">



Там где рассвет, заката нет
Лучами солнца передам привет
Там где нас нет, печали свет
А мне бы лишь услышать твой голос в ответ

</div>

</div>
</div>



<?php
}
?>

</div>


	
</div>


	

	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>
