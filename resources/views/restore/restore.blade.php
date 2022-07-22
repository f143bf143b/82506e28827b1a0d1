<?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>


<style type="text/css">
.content{width:49%!important;}
</style>
<div id="reg_main_page">
	


<div class="form__block">
	
<div class="form__title">Восстановить пароль</div>

<div class="form__body">
	

<FORM action="" method="POST">
@csrf







<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Email</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="" class="text_field_big reg_text_field_big" placeholder="Ваш email" style="">
  </div>
</div>





<div class="form__input_global_wrap">
  <div class="form__input_wrap">
    <input type="submit" name="" class="button button__green"  style="" value="Восстановить">
  </div>
</div>


<div>
  <a href="/login">Вход</a>
</div>
<div style="margin-top:9px;">
  <a href="/login">Регистрация</a>
</div>



</FORM>



</div>
</div>


</div>


	

	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>
