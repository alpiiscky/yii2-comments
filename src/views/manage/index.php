<?php

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

            //'content:ntext',
            //'url:url',
            'model',
//            [
//                'attribute'=>'model_key',
//                'label'=>'Название сущности',
//                'format'=>'text',
//                'content'=>function($data){
//
//                    return $data->getParentName();
//                },
//                //'filter' => Category::getParentsList()
//            ],
            //'main_parent_id',
            'username',
            'email:email',
            // 'username',

            // 'language',
            // 'created_by',
            // 'updated_by',
            'created_at:datetime',
            // 'updated_at',
            'ip',
            [
                'attribute'=>'status',
                'label'=>'Статус',
                'format'=>'html',
                'content'=>function($data){
                    return $data->statuses;
                },
                'filter' => \alpiiscky\comments\models\Comments::getStatusesArray()
            ],
            [
                'attribute'=>'updated_at',
                'label'=>'Действия',
                'format'=>'html',
                'content'=>function($data){
                    $btn1 = '<a href="/comments/manage/success?id='.$data->id.'" title="Опубликовать" aria-label="Опубликовать" data-pjax="0">
                                    <i class="fa fa-check"  style="color:green;"></i>Опубл.</a>';
                    $btn2 = '<a href="/comments/manage/error?id='.$data->id.'" title="В спам" aria-label="В спам" data-pjax="0">
                                    <i class="fa fa-times"  style="color:red;"></i>В спам</a>';
                    $btn3 = '<a href="/comments/manage/delete?id='.$data->id.'" title="Удалить" aria-label="Удалить" data-pjax="0" data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post">
                                    <i class="fa fa-trash"></i>Удал.</a>';
                    return $btn1 .'<br>' . $btn2 . '<br>' . $btn3;
                }
            ],

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
