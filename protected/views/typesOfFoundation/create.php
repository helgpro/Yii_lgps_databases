<?php
/* @var $this TypesOfFoundationController */
/* @var $model TypesOfFoundation */

$this->breadcrumbs=array(
	'Types Of Foundations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TypesOfFoundation', 'url'=>array('index')),
	array('label'=>'Manage TypesOfFoundation', 'url'=>array('admin')),
);
?>

<h1>Create TypesOfFoundation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>