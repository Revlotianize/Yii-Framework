<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

/**
* 
*/
class TryController extends Controller
{
	
	public function actionCheck()
	{
		$string = "LEts check it is passing or not";
		return $this->render("index",['stri'=>$string]);
		# code...
	}
}

?>