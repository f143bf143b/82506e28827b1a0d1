  <?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>

<div class="nav_first" style="text-align: center;padding:14px 0 0px;border-bottom: 1px solid #DDD;">
	<style type="text/css">
	.nav_first__item{padding:0px 9px 11px;display: inline-block;}
	</style>

<a href="/photo" class="nav_first__item">Мои фото</a>
<span style="padding:0 14px;">|</span>
<a href="/photo/upload" class="nav_first__item" style="color:blue;border-bottom:1px solid blue;">+ Загрузить фото</a>


</div>
<style type="text/css">
.content{width:80%!important;}

.text_field_big:focus{outline: none;border:1px solid blue;}
.reg_text_field_big{width:100%}
.form__input_global_wrap{margin:14px 0;}





.photo_block__image_wrap{margin:9px}
.photo_block__image{width:100%;height:24vh; border-radius:9px;}

.biggy_photo{background-size: cover;background-position: center;}

.photo_block {
    width: 25%;
    /* display: inline-block; */
    margin-right: -1%;
    /* padding: 7px; */
    float: left;

}

    .nav_first{}a{color:#000;}


    .photo_block__title{padding:6px 0;margin: 5px 0 9px;text-align: center;height:77px;overflow: hidden;line-height:25px;}
</style>

<div id="reg_main_page">
	






<div class="form__block">
	<div style="width:75%;margin:auto;">
<div class="form__title">Загрука фото</div>

<div class="form__body" style="clear:both;padding-bottom:44px;">
	<div style="margin-top:29px;">Для загрузки фото нажмите на кнопку ниже</div>

<FORM action="" method="POST">
@csrf


<div class="form__input_global_wrap">
  <div class="form__input_wrap">
    <input type="submit" name="login_submit_0" class="button " style="color: #000;border:1px solid #DDD;" value="Выбрать фото">
  </div>
</div>


<div class="form__input_global_wrap">
  <div class="form__input_wrap">
    <button name="" class="button button__green"  style="" onClick="$(this).hide();$('#form__input_global_wrap_password').show();$('#showen').show();event.preventDefault();">Сохранить</button>
  </div>
</div>

</div>

	


</FORM>



</div>


	


<?php
for($i=0;$i<7;$i++) {
?>












<div class="photo_block" style="position: relative;">


<div style="position:absolute;background-color: #000;color:#FFF;padding: 5px 9px;margin:9px;top: 0;right: 0;border-radius:7px;cursor: pointer;">x</div>


<div class="photo_block__image_wrap">
<div class="photo_block__image biggy_photo" style="background-image: url('/image/bmw_csl_hommage_vid_sboku_105056_1680x1050.jpg');">
</div>



<div class="photo_block__title">


<input type="text" name="" class="text_field_big" placeholder="Название фото" style="height:31px;">
</div>

</div>
</div>	










<?php
}
?>





















<div style="clear:both;"></div>




</div>


</div>


	

	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>
