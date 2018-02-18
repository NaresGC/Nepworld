<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\NepworldPage */

$this->title = 'Create Nepworld Page';
$this->params['breadcrumbs'][] = ['label' => 'Nepworld Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nepworld-page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
