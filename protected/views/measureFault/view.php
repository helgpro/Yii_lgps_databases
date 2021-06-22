<?php
/* @var $this MeasureFaultController */
/* @var $model MeasureFault */

$this->breadcrumbs=array(
	'Неудавшиеся измерения'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Исправить', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Вид <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'marker_site',
		//'date',
               // 'date_e',
                'count',
		//'tour',
             array(
                   'name'=>'tour',
                    'value'=>$model->tou_r->name,
                 ),
		//'operator',
            array(
                   'name'=>'operator',
                    'value'=>$model->operato_r->name,
                 ),
		'reason',
		'id_user',
	),
)); ?>
