<?php
/* @var $this PetugasController */
/* @var $model Petugas */

$this->breadcrumbs=array(
	'Petugases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Petugas', 'url'=>array('index')),
	array('label'=>'Manage Petugas', 'url'=>array('admin')),
);
?>

<h1>Create Petugas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>