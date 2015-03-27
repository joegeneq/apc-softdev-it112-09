<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\Industrypartners\models\IndustryPartners;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\internship\models\IndustryprofessorsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Industry Professors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="industryprofessors-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            ['class' => 'yii\grid\ActionColumn'],
            //'id',
			[
				'attribute'=>'company_id',
				'value'=>'company.company_name',
				'label'=>'Company'
			],
            //'username',
            //'firstname',
            'lastname',
            'email:email',
            ['attribute' => 'contact_num', 'label' => 'Contact Number'],

            //'user_id',
        ],
    ]); ?>

</div>
