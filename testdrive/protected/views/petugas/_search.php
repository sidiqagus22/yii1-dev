<?php
/* @var $this PetugasController */
/* @var $model Petugas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_petugas'); ?>
		<?php echo $form->textField($model,'id_petugas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_petugas'); ?>
		<?php echo $form->textField($model,'nama_petugas',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alamat_petugas'); ?>
		<?php echo $form->textField($model,'alamat_petugas',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jam_jaga'); ?>
		<?php echo $form->textField($model,'jam_jaga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
