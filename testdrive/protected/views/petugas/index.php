<?php
/* @var $this PetugasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Petugases',
);

$this->menu=array(
	array('label'=>'Create Petugas', 'url'=>array('create')),
	array('label'=>'Manage Petugas', 'url'=>array('admin')),
);
?>

<h1>Petugases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
