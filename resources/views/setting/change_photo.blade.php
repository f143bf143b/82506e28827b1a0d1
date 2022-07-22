<?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>
<style type="text/css">
.content{width:49%!important;}
</style>

<div id="login_main_page">
	
<div class="nav_first" style="text-align: center;padding:14px 0 0px;border-bottom: 1px solid #DDD;">
	<style type="text/css">
	.nav_first__item{padding:0px 9px 11px;display: inline-block;}
	</style>

<a href="/setting" class="nav_first__item">Информация</a>
<span style="padding:0 14px;">|</span>
<a href="/setting/change_photo" class="nav_first__item" style="color:blue;border-bottom:1px solid blue;">Загрузить фото</a>


</div>

<div class="form__block">
	
<div class="form__title"  style="font-size:1.9em;margin-bottom:19px;">Настройки</div>
<div style="text-align:center;font-size: 1.2em;">Сменить фото</div>
<div class="form__body">
	



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

<div class="form__input_global_wrap">

<div class="photo_block__image_wrap">
<div class="photo_block__image biggy_photo" style="background-image: url('/image/bmw_csl_hommage_vid_sboku_105056_1680x1050.jpg');">


</div>
</div>






</div>







<div class="form__input_global_wrap">
  <div class="form__input_wrap">
    <input type="submit" name="login_submit_0" class="button "  style="color: #000;border:1px solid #DDD;" value="Выбрать фото">
  </div>
</div>


<div class="form__input_global_wrap">
  <div class="form__input_wrap">
    <input type="submit" name="login_submit_0" class="button button__green"  style="" value="Загрузить фото">
  </div>
</div>


<div>
  <a href="/setting">Информация</a>
</div>



</FORM>



</div>
</div>


</div>


	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>

	