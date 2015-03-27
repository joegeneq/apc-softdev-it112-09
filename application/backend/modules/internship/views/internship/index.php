<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\internship\models\InternshipSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Internships';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="internship-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'company_id',
            'student_id',
            'start_date',
            'end_date',
            'iprofessor_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
