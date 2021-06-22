<?php
/* @var $this MarkRegController */
/* @var $model MarkReg */

$this->breadcrumbs=array(
	'Mark Regs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MarkReg', 'url'=>array('index')),
	array('label'=>'Manage MarkReg', 'url'=>array('admin')),
);
?>

<h1>Create MarkReg</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>