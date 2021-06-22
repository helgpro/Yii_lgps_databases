<?php
/* @var $this MarkPointsController */
/* @var $model MarkPoints */

$this->breadcrumbs=array(
	'Имена пунктов'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mark-points-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление Имена пунктов</h1>



<?php echo CHtml::link('Рассширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mark-points-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
                'shortname',
                'nets',
                'condsurv',
                'country',
          
                array('name'=>'kroky', 'type'=>'raw','value'=>'CHtml::link($data->kroky)'),
                'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
