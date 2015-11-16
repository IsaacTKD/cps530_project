<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View*/
/* @var $model app\models\Movie*/
/* @var $form yii\widgets\ActiveForm*/
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'movie_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_runningtime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_year')->textInput() ?>

    <?= $form->field($model, 'movie_director')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie_genre')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
