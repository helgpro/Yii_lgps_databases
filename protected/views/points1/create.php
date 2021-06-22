<?php
/* @var $this Points1Controller */
/* @var $model Points1 */

$this->breadcrumbs=array(
	'Points1s'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Points1', 'url'=>array('index')),
	array('label'=>'Manage Points1', 'url'=>array('admin')),
);
?>

<h1>Create Points1</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>