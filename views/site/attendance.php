<?php
use yii\helpers\Html;

use yii\bootstrap\ActiveForm;

?>
<?
$form = ActiveForm::begin();


?>

<?php # $model->active = 0; ?>
<div class="site-about">
    <table>
        <tr><?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'pose')->checkbox([ 'value' => '1'])->label('');?></tr>
    </table>

</div>

<button type="submit">апааа</button>
<? ActiveForm::end(); ?>

