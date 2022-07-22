<?php
include SITE_ROOT.'/resources/views/tpl/head.tpl.php';
?>


<div id="photo_main_page">



				<div  style="clear: both;font-weight: bold;padding:14px 14px 11px;text-align: center;border-bottom: 1px solid #DDD;">Лента</div>	


<style type="text/css">
.photo_block__image_wrap{margin:9px}
.photo_block__image{width:100%;height:34vh; border-radius:9px;}

.biggy_photo{background-size: cover;background-position: center;}

.photo_block {
    width: 26%;
    /* display: inline-block; */
    margin-right: -1%;
    /* padding: 7px; */
    float: left;

}

    .nav_first{}a{color:#000;}


    .photo_block__title{padding:6px 0;margin: 5px 0 9px;text-align: center;height:77px;overflow: hidden;line-height:25px;}
</style>
<div style="text-align: center;">






    






<div class="photo_block" style="position: relative;">

    <div style="position:absolute;top: 0;left:0;right:0;bottom:0;background-color:#000;opacity: .7;z-index: 9;color: #FFF;border-radius:14px;">
        <div style="margin-top: 134px;z-index: 9;">
<div style="font-weight: bold;font-size:1.4em;margin-bottom:17px;">Фото удалено</div>

        <div><button style="border:1px solid #FFF;background-color:transparent;color: #FFF;padding:3px 11px;border-radius:17px;font-size: .9em;cursor: pointer;">Восстановить</button></div>

        </div>

        

    </div>
    <div style="position: absolute;background-color: #000;color: #FFf;padding:6px 9px;margin:11px;right:0;border-radius:7px;    cursor: pointer;">удалить</div>
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
    <div style="position: absolute;background-color: #000;color: #FFf;padding:6px 9px;margin:11px;right:0;border-radius:7px;    cursor: pointer;">удалить</div>
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


	<div style="clear:both;"></div>

	<?php
include SITE_ROOT.'/resources/views/tpl/footer.tpl.php';
?>
