<?php
/* @var $this TripsMarksController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trips Marks',
);

$this->menu=array(
	array('label'=>'Create TripsMarks', 'url'=>array('create')),
	array('label'=>'Manage TripsMarks', 'url'=>array('admin')),
);
?>

<h1>Trips Marks</h1>
<select id="selectbox">
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/antennas">Аньены</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/ConditionsOfSurvey" selected>Режимы измерения</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/countries" selected>Страны</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/marks" selected>Марки</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/nets" selected>Сети </option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/operators" selected>Операторы</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/receivers" selected>Приемники</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/tours" selected>Кампании</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/typesOfAntennaPosition" selected>Типы установки антен</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/typesOfFastening" selected>Тип конструкции</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/typesOfFoundation" selected>Типы основания</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/typesOfGround" selected>Тип груна</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/measurements" selected>Измерения</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/agencies" selected>agensis</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/points" selected>Пункты</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/measurementsShort" selected>Измерения(представл)</option>
    <option value=<?php echo Yii::app()->request->baseUrl; ?>"/measurStatuses" selected>Статусы</option>
    <option value= <?php echo Yii::app()->request->baseUrl; ?>"/measureFault">Неудачные измерения</option>
</select>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
