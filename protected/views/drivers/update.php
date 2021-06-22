<?php
/* @var $this DriversController */
/* @var $model Drivers */

$this->breadcrumbs=array(
	'Водители'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Исправить',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Вид', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Update Drivers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>