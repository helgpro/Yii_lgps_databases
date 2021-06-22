<?php
/* @var $this TypesOfAntennaPositionController */
/* @var $model TypesOfAntennaPosition */

$this->breadcrumbs=array(
	'Types Of Antenna Positions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TypesOfAntennaPosition', 'url'=>array('index')),
	array('label'=>'Create TypesOfAntennaPosition', 'url'=>array('create')),
	array('label'=>'Update TypesOfAntennaPosition', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TypesOfAntennaPosition', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TypesOfAntennaPosition', 'url'=>array('admin')),
);
?>

<h1>View TypesOfAntennaPosition #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'id_user',
	),
)); ?>
