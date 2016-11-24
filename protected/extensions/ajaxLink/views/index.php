<?php  echo CHtml::link(  "$name",
'',
  array("onclick"=>"ajaxGo('$link','$name');return false;",'class'=>$aclass)
  , 
  array( // самое интересное
  //  'href' => Yii::app()->createUrl('/'. $link ),// подменяет ссылку на другую
    'id'=>$id
    )
);

  
?>