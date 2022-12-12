<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Cadastro $model */

$this->title = 'Criar Cadastro';
$this->params['breadcrumbs'][] = ['label' => 'Cadastros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cadastro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
