<?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>
<style type="text/css">
.content{width:49%!important;}
</style>

<div id="login_main_page">
	


<div class="form__block">
	
<div class="form__title">Вход</div>

<div class="form__body">
	




<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Email</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="login_email_0" class="text_field_big login_text_field_big" placeholder="Ваш email" style="">
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
  <a href="/reg">Регистрация</a>
</div>



</FORM>



</div>
</div>


</div>


	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>

