<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\base\Model;

/* @var $this yii\web\View */
/* @var $model frontend\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>
    <table>
    	<tr>
    		<td>Title</td>
    		<td>Content</td>
    	</tr>
    	<?php
    		foreach ($prts as $index => $product) {
    			echo '<tr>';
    			echo '<td>'.$form->field($product, '['.$index.']title')->textInput(['maxlength'=>true])->label(false).'</td>';
    			echo '<td>'.$form->field($product, '['.$index.']content')->textInput(['maxlength'=>true])->label(false).'</td>';
    			echo '</tr>';
    		}
    	?>
    </table>

    <div class="form-group">
        <?= Html::submitButton($product->isNewRecord ? 'Create' : 'Update', ['class' => $product->isNewRecord ? 'btn btn-success': 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
