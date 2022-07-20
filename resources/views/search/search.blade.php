<?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>


<div id="photo_main_page">

<style type="text/css">
.text_field_big{}
.reg_text_field_big{}
</style>

<div class="nav_first" style="text-align: center;padding:14px 0 14px;border-bottom: 1px solid #DDD;">
	<style type="text/css">
	.nav_first__item{padding:0px 9px 11px;display: inline-block;}
	</style>
	<div>
		 
<input type="text" name="" class="text_field_big reg_text_field_big" placeholder="Поиск" autofocus="" style="width:54%;background-color:#FBFBFB;">
<div style="position:relative;margin-right:24%;top:-30px;padding: 0 9px;">
<div style="    position: absolute;
    right: 0;
    height: 41px;
    top: -12px;
    margin-right: -9px;
    padding: 11px;cursor: pointer;">
	<i style="background-image:url('/image/icon/magnify_big.png');width:17px;height:17px;background-size: cover;display: block;"></i>
	</div>
</div></div>

</div>

<style type="text/css">
.photo_block__image_wrap{margin:9px}
.photo_block__image{width:100%;height:27vh; border-radius:9px;}

.biggy_photo{background-size: cover;background-position: center;}

.photo_block{
    width: 21%;
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
Стив Джобс
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
