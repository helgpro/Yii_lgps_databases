<?php
/* @var $this ConditionsOfSurveyController */
/* @var $model ConditionsOfSurvey */

$this->breadcrumbs=array(
	'Режим Измерения'=>array('index'),
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
	$('#conditions-of-survey-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление режимы измерения</h1>

<select id="selectbox">
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/drivers" selected>drive</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/antennas">antena</option>
    <option value= <?php echo Yii::app()->request->baseUrl; ?>"/marks">gmail</option>
</select>


<?php echo CHtml::link('Рассширеный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'conditions-of-survey-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'description',
		'id_user',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
