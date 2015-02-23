<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Partners */

$this->title = $model->company_name;
$this->params['breadcrumbs'][] = ['label' => 'Partners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partners-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php if (Yii::$app->user->isGuest == false) {
                    echo Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']);
                }
        ?>
        <?php if (Yii::$app->user->isGuest == false) {
                    echo Html::a('Delete', ['delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]);
                }
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'company_name',
            'company_address',
            ['label'=>'Contact No.', 'value' => $model->company_contactnum],
            'company_description:ntext',
        ],
    ]) ?>

</div>
