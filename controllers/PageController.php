<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

/**
* Demo PageController
*/
class PageController extends Controller
{	
	public function actionTestimonials()
	{
		return $this->render('testimonials');
	}
}