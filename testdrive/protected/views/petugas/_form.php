<?php
/* @var $this PetugasController */
/* @var $model Petugas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'petugas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_petugas'); ?>
		<?php echo $form->textField($model,'nama_petugas',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nama_petugas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alamat_petugas'); ?>
		<?php echo $form->textField($model,'alamat_petugas',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'alamat_petugas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_hp'); ?>
		<?php echo $form->textField($model,'no_hp'); ?>
		<?php echo $form->error($model,'no_hp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jam_jaga'); ?>
		<?php echo $form->textField($model,'jam_jaga'); ?>
		<?php echo $form->error($model,'jam_jaga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->