<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
		use app\models\Province;
		$provinces=Province::find('id')->value($model,'province_id');
		
		use yii\helpers\ArrayHelper;
		$listData=ArrayHelper::map($provinces,'id','province_description');
/* @var $this yii\web\View */
/* @var $model app\models\city */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-view">

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

    <?= $attributes = [
		[
			'attribute'=>'id', 
			'format'=>'raw', 
			'displayOnly'=>true
		],
		[
			'attribute'=>'city_code', 
			'format'=>'raw', 
			'displayOnly'=>true
		],
		[
			'attribute'=>'city_description', 
			'format'=>'raw', 
			'displayOnly'=>true
		],
		[
			'attribute'=>'city_description', 
			'format'=>'raw', 
			'displayOnly'=>true,
			'widgetOptions'=>[
            'data'=>ArrayHelper::map(Author::find()->orderBy('name')->asArray()->all(),
		], 
		];
			DetailView::widget([
        'model' => $model,
        'attributes' => $attributes,
		
    ]) ?>

</div>
