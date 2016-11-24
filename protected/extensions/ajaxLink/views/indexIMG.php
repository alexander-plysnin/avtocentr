<?php 
if($bace=='bace'){
    $url=Yii::app()->baseUrl;
}else(
   $url=Yii::app()->theme->baseUrl
);
echo CHtml::link("$div". CHtml::image($url.$img,'',array('class'=>"$class")),

 Yii::app()->createUrl( '/site/'.$link ),

   array("onclick"=>"ajaxGo('$link','$name');return false;",'class'=>$aclass)

  

  , array( // самое интересное

    'href' => Yii::app()->createUrl('/'. $link ),// подменяет ссылку на другую

    'id'=>$id,

    

    )

 

);



 ?>

