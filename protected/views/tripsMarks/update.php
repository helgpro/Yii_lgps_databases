<?php
/* @var $this TripsMarksController */
/* @var $model TripsMarks */

$this->breadcrumbs=array(
	'Trips Marks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TripsMarks', 'url'=>array('index')),
	array('label'=>'Create TripsMarks', 'url'=>array('create')),
	array('label'=>'View TripsMarks', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TripsMarks', 'url'=>array('admin')),
);
?>

<h1>Update TripsMarks <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>