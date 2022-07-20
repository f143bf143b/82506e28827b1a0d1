<?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>


<div id="photo_main_page">



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
    margin-right: -15px;}

    .nav_first{}a{color:#000;}


    .photo_block__title{padding:6px 0;margin: 5px 0 9px;text-align: center;height:77px;overflow: hidden;line-height:25px;}
</style>



<?php
for($i=0;$i<7;$i++) {

?>

<div class="photo_block">
<div class="photo_block__image_wrap">
<div class="photo_block__image biggy_photo" style="background-image: url('/image/bmw_csl_hommage_vid_sboku_105056_1680x1050.jpg');">
</div>

<div class="photo_block__title">






Организация концертов Егор Крид:
Тел.: +7 (965) 407-79-94 (Прохор)
E-mail: kreedbooking@black-star.ru



</div>
</div>
</div>



<?php
}
?>




	
</div>


	

	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>
