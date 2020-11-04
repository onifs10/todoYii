<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TodosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Todos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Todos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
            'body:ntext',
            'created_at:date',
            'done' => [
                'label' => 'Done',
                'value' => function ($model){
                    return  $model->done   ?  "<h5 class='text-success'><span class='glyphicon glyphicon-ok' ></span> checked </h5>" : '<span class="glyphicon glyphicon-remove text-danger" ></span>  '. Html::a( 'check' , ['/todo/tick','id' => $model->id],['class' => 'text-danger'  ]);
                },
                'format' => 'raw',
            ],
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
