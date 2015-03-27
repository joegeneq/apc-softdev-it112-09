<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\internship\models\Industryprofessors */

/* @var $students backend\modules\internship\models\Internship */
$this->title = 'Industry Professor: ' . $model->lastname . ', ' . $model->firstname;
$this->params['breadcrumbs'][] = ['label' => 'Industry Professors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->lastname . ', ' . $model->firstname;
?>
<div class="industryprofessors-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'username',
            'firstname',
            'lastname',
            'email:email',
            'contact_num',
            ['label' => 'Company', 'value' => $model->company->company_name],
            //'user_id',
        ],
    ]) ?>
	
    <h1>Students</h1>
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
