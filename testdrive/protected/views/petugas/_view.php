<?php
/* @var $this PetugasController */
/* @var $data Petugas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_petugas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_petugas), array('view', 'id'=>$data->id_petugas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->nama_petugas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_petugas')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_petugas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_hp')); ?>:</b>
	<?php echo CHtml::encode($data->no_hp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jam_jaga')); ?>:</b>
	<?php echo CHtml::encode($data->jam_jaga); ?>
	<br />


</div>