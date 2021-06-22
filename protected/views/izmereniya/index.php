<?php
/* @var $this IzmereniyaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Izmereniyas',
);

$this->menu=array(
	array('label'=>'Create Izmereniya', 'url'=>array('create')),
	array('label'=>'Manage Izmereniya', 'url'=>array('admin')),
);
?>

<h1>Izmereniyas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
