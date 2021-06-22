<?php
/* @var $this Receivers2Controller */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Receivers2s',
);

$this->menu=array(
	array('label'=>'Create Receivers2', 'url'=>array('create')),
	array('label'=>'Manage Receivers2', 'url'=>array('admin')),
);
?>

<h1>Receivers2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
