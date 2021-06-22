<?php

/**
 * This is the model class for table "trips_marks".
 *
 * The followings are the available columns in table 'trips_marks':
 * @property integer $trip_id
 * @property string $marker_number
 * @property integer $number_in_trip
 * @property double $distance_from_previous_marker
 * @property string $measurement_start
 * @property string $measurement_finish
 * @property string $comment
 */
class TripsMarks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'trips_marks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('trip_id, marker_number, number_in_trip, distance_from_previous_marker', 'required'),
			array('trip_id, number_in_trip', 'numerical', 'integerOnly'=>true),
			array('distance_from_previous_marker', 'numerical'),
			array('marker_number', 'length', 'max'=>6),
			array('measurement_start, measurement_finish, comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('trip_id, marker_number, number_in_trip, distance_from_previous_marker, measurement_start, measurement_finish, comment', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trip_id' => 'Trip',
			'marker_number' => 'Marker Number',
			'number_in_trip' => 'Number In Trip',
			'distance_from_previous_marker' => 'Distance From Previous Marker',
			'measurement_start' => 'Measurement Start',
			'measurement_finish' => 'Measurement Finish',
			'comment' => 'Comment',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('trip_id',$this->trip_id);
		$criteria->compare('marker_number',$this->marker_number,true);
		$criteria->compare('number_in_trip',$this->number_in_trip);
		$criteria->compare('distance_from_previous_marker',$this->distance_from_previous_marker);
		$criteria->compare('measurement_start',$this->measurement_start,true);
		$criteria->compare('measurement_finish',$this->measurement_finish,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TripsMarks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
