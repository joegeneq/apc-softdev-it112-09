<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Student;

class StudentController extends \yii\web\Controller
{
    public function actionIndex()
    {
      //  return $this->render('index');
	  $student = Student::find()->all();
	  
	  return $this->render('index',['student'=>$student]);
    }

}
