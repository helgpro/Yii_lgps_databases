<?php
/* @var $this MarkRegController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mark Regs',
);

$this->menu=array(
	array('label'=>'Create MarkReg', 'url'=>array('create')),
	array('label'=>'Manage MarkReg', 'url'=>array('admin')),
);
?>

<h1>Mark Regs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
