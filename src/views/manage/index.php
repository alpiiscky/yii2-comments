<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel alpiiscky\comments\models\CommentsSearch */

$this->title = Yii::t('comments', 'Comments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'content:ntext',
            'url:url',
            'model',
            'model_key',
            'main_parent_id',
            // 'parent_id',
            // 'email:email',
            // 'username',

            // 'language',
            // 'created_by',
            // 'updated_by',
            // 'created_at',
            // 'updated_at',
            // 'ip',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
