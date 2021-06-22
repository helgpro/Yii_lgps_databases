<?php
/* @var $this MarksNewController */
/* @var $model MarksNew */

$this->breadcrumbs=array(
	'Marks News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MarksNew', 'url'=>array('index')),
	array('label'=>'Manage MarksNew', 'url'=>array('admin')),
);
?>

<h1>Create MarksNew</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>