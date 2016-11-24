<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
	   if(isset($_POST['name'])&&$_POST['name']!=null){

$email = Yii::app()->email;
$email->to = 'avangard00@mail.ru';
$email->from = Yii::app()->params['adminEmail'];
$email->subject = 'Заявка на запись';
$email->message = 'Заявка на запись в автоцентр от <strong>'.$_POST['name'].'</strong>, номер телефона <strong>'.$_POST['namber'].'</strong>';
$email->send();

			}
            
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
	 if(Yii::app()->request->isAjaxRequest){
       $this->renderPartial('index');
       }
       else{
           $this->render('index');
   
       }
	}
    public function actionIrkutsk_proiti_techosmotr_kupit_nomer_na_avto_avtostrahovka_osago_casco()
	{
	   if(isset($_POST['name'])&&$_POST['name']!=null){

$email = Yii::app()->email;
$email->to = 'avangard00@mail.ru';
$email->from = Yii::app()->params['adminEmail'];
$email->subject = 'Заявка на запись';
$email->message = 'Заявка на запись в автоцентр от <strong>'.$_POST['name'].'</strong>, номер телефона <strong>'.$_POST['namber'].'</strong>';
$email->send();

			}
            
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
	 if(Yii::app()->request->isAjaxRequest){
       $this->renderPartial('index');
       }
       else{
           $this->render('index');
   
       }
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	public function actionTehosmotr_avto_v_irkutske()
	{	  
	   if(Yii::app()->request->isAjaxRequest){
       $this->renderPartial('to',$data, false, true);
       }
       else{
           $this->render('to', $data, false, true);
   
       }
	}
    	public function actionAvtostrahovanie_osago_casco_v_irkutske()
	{	  
	   if(Yii::app()->request->isAjaxRequest){
       $this->renderPartial('insurance',$data, false, true);
       }
       else{
           $this->render('insurance', $data, false, true);
   
       }
	}
    	public function actionDublicati_gos_nomerov_v_irkutske()
	{	  
	   if(Yii::app()->request->isAjaxRequest){
       $this->renderPartial('nambers');
       }
       else{
           $this->render('nambers');
   
       }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
  
         
        		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
            
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}