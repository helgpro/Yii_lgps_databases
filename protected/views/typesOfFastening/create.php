<?php
/* @var $this TypesOfFasteningController */
/* @var $model TypesOfFastening */

$this->breadcrumbs=array(
	'Types Of Fastenings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TypesOfFastening', 'url'=>array('index')),
	array('label'=>'Manage TypesOfFastening', 'url'=>array('admin')),
);
?>

<h1>Create TypesOfFastening</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>