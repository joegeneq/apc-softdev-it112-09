<?php

namespace app\models;

use yii\base\Model;

class StudentRegistForm extends Model
{
	public $stdnt_num;
	public $lstnme;
	public $frstnme;
	public $initial;
	public $email;
	public $passwd;
	
	public function rules()
	{
		return [
				[['stdnt_num','lstnme','frstnme','initial','email','passwd'],'required'],
				['email','email'],
				];
	}
}