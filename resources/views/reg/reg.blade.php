  <?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>


<style type="text/css">
.content{width:49%!important;}
</style>
<div id="reg_main_page">
	


<div class="form__block">
	
<div class="form__title">Регистрация</div>

<div class="form__body">
	

<FORM action="" method="POST">
@csrf
<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Имя</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="" class="text_field_big reg_text_field_big" placeholder="Ваше имя" style="" autofocus="">
  </div>
</div>






<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Фамилия</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="" class="text_field_big reg_text_field_big" placeholder="Ваша фамилия" style="">
  </div>
</div>



<div style="display: none;" id="showen">

<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Логин</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="" class="text_field_big reg_text_field_big" placeholder="Ваш логин" style="">
  </div>
</div>






<div class="form__input_global_wrap">
  <div class="form__label">
	<span class="form__label_title">Email</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="" class="text_field_big reg_text_field_big" placeholder="Ваш email" style="">
  </div>
</div>





<div class="form__input_global_wrap" id="form__input_global_wrap_password">
  <div class="form__label">
	<span class="form__label_title">Пароль</span>
  </div>
  <div class="form__input_wrap">
    <input type="text" name="" class="text_field_big reg_text_field_big" placeholder="Ваш пароль" style="">
  </div>
</div>


<div class="form__input_global_wrap" style="display: snone;">
  <div class="form__input_wrap">
    <input type="submit" name="" class="button button__green"  style="" value="Зарегестрироваться">
  </div>
</div>

</div>


<div class="form__input_global_wrap">
  <div class="form__input_wrap">
    <button name="" class="button button__green"  style="" onClick="$(this).hide();$('#form__input_global_wrap_password').show();$('#showen').show();event.preventDefault();">Далее ></button>
  </div>
</div>








<div>
  <a href="/login">Вход</a>
</div>



</FORM>



</div>
</div>


</div>


	

	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>
