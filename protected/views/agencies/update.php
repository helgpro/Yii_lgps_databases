<?php
/* @var $this AgenciesController */
/* @var $model Agencies */

$this->breadcrumbs=array(
	'Agencies'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Agencies', 'url'=>array('index')),
	array('label'=>'Create Agencies', 'url'=>array('create')),
	array('label'=>'View Agencies', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Agencies', 'url'=>array('admin')),
);
?>

<h1>Update Agencies <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>