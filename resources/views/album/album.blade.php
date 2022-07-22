<?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>


<div id="photo_main_page">


				<div  style="clear: both;font-weight: bold;padding:14px 14px 11px;text-align: center;">Альбомы</div>	


<div class="nav_first" style="text-align: center;padding:14px 0 0px;border-bottom: 1px solid #DDD;">
	<style type="text/css">
	.nav_first__item{padding:0px 9px 11px;display: inline-block;}
	</style>

<a href="/photo" class="nav_first__item">Мои фото</a>
<span style="padding:0 14px;">|</span>
<a href="/album" class="nav_first__item" style="color:blue;border-bottom:1px solid blue;">Мои альбомы</a>
<span style="padding:0 14px;">|</span>
<a href="/album/create" class="nav_first__item">+ Создать альбом</a>


</div>


<style type="text/css">
.photo_block__image_wrap{margin:9px}
.photo_block__image{width:100%;height:34vh; border-radius:9px;}

.biggy_photo{background-size: cover;background-position: center;}

.photo_block{
    width: 26%;
    display: inline-block;
    margin-right: -19px;}

    .nav_first{}


    .photo_block__title{padding:6px 0;margin: 5px 0 9px;text-align: center;height:77px;overflow: hidden;line-height:25px;margin-top:-17px;}

.nav_first__item{color:#000;}

.photo_block__image_wrap{padding:3px}

.photo_block__image{}

</style>


<div style="text-align: center;
    margin-right: -2%;width: 99%;">
<?php
for($i=0;$i<7;$i++) {

?>

<div class="photo_block">
<div class="photo_block__image_wrap">
<div class="photo_block__image biggy_photo" style="background-image: url('/image/bmw_csl_hommage_vid_sboku_105056_1680x1050.jpg');">
</div>



<div style="margin-top:-19px">
	
<div style="background-color: #000;color:#FFF;position: relative;top:-20px;padding:9px 17px;overflow: hidden;opacity: .7;border-radius:7px;text-align: left;">
4 фото
</div>
 


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
