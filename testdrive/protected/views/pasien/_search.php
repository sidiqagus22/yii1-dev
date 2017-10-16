<?php
/* @var $this PasienController */
/* @var $model Pasien */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row" style="margin: 5px 0;">
		<!-- <?php echo CHtml::dropDownList('listname', $model, 
              array('1' => '10', '2' => '20')); ?> -->
        <input type="text" name="inputSearch" id="inputSearch" style="float: right;">
	</div>
	<!-- <div class="row" style="text-align: right;">
		<?php echo $form->label($model,'kd_pasien'); ?>
		<?php echo $form->textField($model,'kd_pasien',array('size'=>60,'maxlength'=>100)); ?>
	</div> -->
	<div class="row buttons" style="display: none;">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
