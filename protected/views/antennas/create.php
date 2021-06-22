<?php
/* @var $this AntennasController */
/* @var $model Antennas */

$this->breadcrumbs=array(
	'Antennases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Antennas', 'url'=>array('index')),
	array('label'=>'Manage Antennas', 'url'=>array('admin')),
);
?>

<h1>Create Antennas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>