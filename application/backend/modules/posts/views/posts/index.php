<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\modules\posts\models\PostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Posts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

<?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            //['class' => 'yii\grid\SerialColumn'],   

            // 'id',
            ['label'=>'Type','value'=>'post_type', 'attribute' => 'post_type'],
            ['label'=>'Title','value'=>'posts_title', 'attribute' => 'posts_title'],
            // 'posts_body:ntext',
            // 'post_attachment:url',
            ['label' => 'Author','value' => 'author0.username', 'attribute' => 'author'],
            // 'author_role',
            // 'created_at',
            // 'updated_at',

        ],
            
    ]); ?>
<?php Pjax::end(); ?>
</div>
