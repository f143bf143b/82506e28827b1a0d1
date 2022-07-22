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

<a href="/setting" class="nav_first__item" style="color:blue;border-bottom:1px solid blue;">Информация</a>
<span style="padding:0 14px;">|</span>
<a href="/setting/change_photo" class="nav_first__item">Загрузить фото</a>


</div>

<div class="form__block">
	
<div class="form__title"  style="font-size:1.9em;margin-bottom:19px;">Настройки</div>
<div style="text-align:center;font-size: 1.2em;">Информация</div>
<div class="form__body">
	




<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Имя</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="login_email_0" class="text_field_big login_text_field_big" placeholder="Ваш email" style="">
  </div>
</div>





<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Фамиия</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="login_pasword_0" class="text_field_big login_text_field_big" placeholder="Ваш пароль" style="">
  </div>
</div>





<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Логин</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="login_pasword_0" class="text_field_big login_text_field_big" placeholder="Ваш пароль" style="">
  </div>
</div>





<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Email</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="login_pasword_0" class="text_field_big login_text_field_big" placeholder="Ваш пароль" style="">
  </div>
</div>







<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Пароль</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="login_pasword_0" class="text_field_big login_text_field_big" placeholder="Ваш пароль" style="">
  </div>
</div>







<div class="form__input_global_wrap">
  <div class="form__input_wrap">
    <input type="submit" name="login_submit_0" class="button button__green"  style="" value="Войти">
  </div>
</div>


<div>
  <a href="/setting/change_photo">Сменить фото</a>
</div>



</FORM>



</div>
</div>


</div>


	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>

