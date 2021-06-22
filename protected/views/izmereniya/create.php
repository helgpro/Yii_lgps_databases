<?php
/* @var $this IzmereniyaController */
/* @var $model Izmereniya */

$this->breadcrumbs=array(
	'Izmereniyas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Izmereniya', 'url'=>array('index')),
	array('label'=>'Manage Izmereniya', 'url'=>array('admin')),
);
?>

<h1>Create Izmereniya</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>