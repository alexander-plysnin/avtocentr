<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<link rel="shortcut icon" href="/images/icon.ico" type="image/x-icon">
<meta name="google-site-verification" content="bRhjwjYdJhMY6G6QQOI0iedGs5Yh5SE9y_f4eC-bsQE" />
<meta name="yandex-verification" content="0b49bc26194579a0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="ru" />
<meta name = "description" content = "<?php if(isset($this->contents)):?><?php $this->widget('avp.GenTitle', array('links'=>$this->contents)); ?><?php endif?>"/>
<meta name = "keywords" content="автостраховка, техосмотр,диагнотика,авто,машину,регистация,осаго,каско,гос,знак" />
   
<meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/ui/css/components/slideshow.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/ui/css/components/slider.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/ui/css/components/slider.almost-flat.min.css" />
  
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/ui/css/components/slidenav.almost-flat.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/ui/css/components/dotnav.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo  Yii::app()->theme->baseUrl;; ?>/ui/css/uikit.css" />
 <?
$cs = Yii::app()->clientScript; 
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/ui/js/components/slider.js', CClientScript::POS_HEAD );
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/ui/js/components/lightbox.min.js', CClientScript::POS_HEAD ) ;
$cs->registerScriptFile( Yii::app()->theme->baseUrl.'/js/jquery.maskedinput.js', CClientScript::POS_HEAD );
$cs->registerScriptFile( Yii::app()->theme->baseUrl.'/ui/js/uikit.min.js', CClientScript::POS_HEAD );
$cs->registerScriptFile( Yii::app()->theme->baseUrl.'/js/script.js', CClientScript::POS_HEAD );
$cs->registerScriptFile(Yii::app()->theme->baseUrl.'/ui/js/components/slideshow.js', CClientScript::POS_HEAD ) ;

Yii::app()->getClientScript()->registerCoreScript('jquery');

?> 

	<title><?php if(isset($this->title)):?><?php $this->widget('avp.GenTitle', array('links'=>$this->title));?><?php endif?></title>
</head>

<body>
<nav class="uk-navbar " style="position: fixed;width: 100%;z-index: 5;">
 <span style="color: white;"><?php /*$this->beginWidget(Yii::app()->params['ajaxLink'],array(
    'id'=>'10',
    'name' => 'AVTOCENTR38',
    'link' => 'index',
    'aclass'=>'uk-navbar-brand',
    
     )); $this->endWidget();*/ ?>
     
   <?echo CHtml::link('AVTOCENTR38', 
array('irkutsk_proiti_techosmotr_kupit_nomer_na_avto_avtostrahovka_osago_casco'),array('class'=>'uk-navbar-brand')
)?>   
      </span>
                                  <div class="uk-flex uk-flex-center">
                                    
                                   <ul class="uk-navbar-nav uk-navbar-center" >
                                    
   </ul>
    
   
</div>

                                 

                                </nav>
                       
                                

    <div id="contets">    
    <div class="uk-contener ">          
        <?php  echo $content; ?></div>                            
         </div>                             
                               
                            
                            
                                       


                                   
                             <?php $this->renderPartial('pages/_slider')?>    
               
                            
                                
                             

<?php $this->renderPartial('pages/_footer')?>
 <script> 
                                           
  UIkit.slideshow('#slide-index',{animation: 'swipe',autoplay:'true'});
  
  
  </script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27591566-2', 'auto');
  ga('send', 'pageview');
  

</script>
</body>
</html>
