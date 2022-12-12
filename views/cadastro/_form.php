<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Cadastro $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="cadastro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomeDoUsuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomeDoLivro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipoDoLivro')->textInput(['maxlength' => true]) ?>
   
    <!-- <?= $form->field($model, 'tipoDoLivro')->dropDownList(['1' => 'Romance','2' => 'Terror','3' => 'Drama','4' => 'Aventura'], ['prompt' => 'Selecione o tipo']) ?>-->

    <?= $form->field($model, 'valor')->textInput() ?>

    <div class="form-group"><br>
        <?= Html::submitButton('Cadastrar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
