<?php
/* @var $this Receivers2Controller */
/* @var $model Receivers2 */

$this->breadcrumbs=array(
	'Receivers2s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Receivers2', 'url'=>array('index')),
	array('label'=>'Manage Receivers2', 'url'=>array('admin')),
);
?>

<h1>Create Receivers2</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>