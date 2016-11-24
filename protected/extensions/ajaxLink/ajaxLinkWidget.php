<?php
 
class ajaxLinkWidget extends CWidget
{
    /**
     * @var string имя пользователя
     */
    public $name = '';
    public $link = '';
    public $img = '';
    public $class= '';
    public $aclass= '';
    public $id = '';
    public $div = '';
    public $bace = '';
 
    /**
     * Запуск виджета
     */public function init()
    {
        
    }

    public function run()
    {
        if($this->img!=null){
        $this->render('indexIMG', array(
            'img' => $this->img,
            'link' => $this->link,
            'class' => $this->class,
            'aclass'=>$this->aclass,
            'id' => $this->id,
            'div' => $this->div,
            'bace' => $this->bace,
        ));
        }
        else{
          $this->render('index', array(
            'name' => $this->name,
            'link' => $this->link,
            'id' => $this->id,
            'aclass'=>$this->aclass,
            
        ));  
    }
    }
}