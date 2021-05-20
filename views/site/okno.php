<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


print_r ($mass);


?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <?php foreach ($mass as $item): ?>
        <h2><?php echo $item->name ?></h2>
        <h2><?php echo $item->pose ?></h2>
    <?php endforeach ?>

</div>

