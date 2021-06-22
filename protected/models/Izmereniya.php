<?php

/**
 * This is the model class for table "izmereniya".
 *
 * The followings are the available columns in table 'izmereniya':
 * @property integer $measurement_id
 * @property integer $marker_id
 * @property string $b_date
 * @property string $b_time
 * @property string $e_date
 * @property string $e_time
 * @property double $sample_rate
 * @property integer $tour_id
 * @property integer $agency_id
 * @property integer $operator_id
 * @property integer $receiver_id
 * @property integer $antenna_id
 * @property double $antenna_measurement
 * @property integer $antenna_position_id
 * @property double $antenna_dh
 * @property string $sours_data
 * @property string $value_size
 * @property string $support_data
 * @property string $rinex_file
 * @property double $apriori_x
 * @property double $apriori_y
 * @property double $apriori_z
 * @property string $weather
 * @property string $note
 * @property integer $status_id
 * @property string $id_user
 */
class Izmereniya extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'izmereniya';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('marker_id, b_date, b_time, e_date, e_time, sample_rate, tour_id, agency_id, operator_id, receiver_id, antenna_id, antenna_measurement, antenna_position_id, antenna_dh, sours_data, value_size, support_data, rinex_file, apriori_x, apriori_y, apriori_z, weather, note, status_id, id_user', 'required'),
			array('marker_id, tour_id, agency_id, operator_id, receiver_id, antenna_id, antenna_position_id, status_id', 'numerical', 'integerOnly'=>true),
			array('sample_rate, antenna_measurement, antenna_dh, apriori_x, apriori_y, apriori_z', 'numerical'),
			array('rinex_file', 'length', 'max'=>12),
			array('id_user', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('measurement_id, marker_id, b_date, b_time, e_date, e_time, sample_rate, tour_id, agency_id, operator_id, receiver_id, antenna_id, antenna_measurement, antenna_position_id, antenna_dh, sours_data, value_size, support_data, rinex_file, apriori_x, apriori_y, apriori_z, weather, note, status_id, id_user', 'safe', 'on'=>'search'),
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
                     'operator'=>array(self::BELONGS_TO, 'Operators', 'operator_id'),
                     'mark'=>array(self::BELONGS_TO, 'MarkNams', 'marker_id'),
                     'tour'=>array(self::BELONGS_TO, 'Tours', 'tour_id'),
                     'operator'=>array(self::BELONGS_TO, 'Operators', 'operator_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'measurement_id' => 'Measurement',
			'marker_id' => 'Marker',
			'b_date' => 'B Date',
			'b_time' => 'B Time',
			'e_date' => 'E Date',
			'e_time' => 'E Time',
			'sample_rate' => 'Sample Rate',
			'tour_id' => 'Tour',
			'agency_id' => 'Agency',
			'operator_id' => 'Operator',
			'receiver_id' => 'Receiver',
			'antenna_id' => 'Antenna',
			'antenna_measurement' => 'Antenna Measurement',
			'antenna_position_id' => 'Antenna Position',
			'antenna_dh' => 'Antenna Dh',
			'sours_data' => 'Sours Data',
			'value_size' => 'Value Size',
			'support_data' => 'Support Data',
			'rinex_file' => 'Rinex File',
			'apriori_x' => 'Apriori X',
			'apriori_y' => 'Apriori Y',
			'apriori_z' => 'Apriori Z',
			'weather' => 'Weather',
			'note' => 'Note',
			'status_id' => 'Status',
			'id_user' => 'Id User',
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

		$criteria->compare('measurement_id',$this->measurement_id);
		$criteria->compare('marker_id',$this->marker_id);
		$criteria->compare('b_date',$this->b_date,true);
		$criteria->compare('b_time',$this->b_time,true);
		$criteria->compare('e_date',$this->e_date,true);
		$criteria->compare('e_time',$this->e_time,true);
		$criteria->compare('sample_rate',$this->sample_rate);
		$criteria->compare('tour_id',$this->tour_id);
		$criteria->compare('agency_id',$this->agency_id);
		$criteria->compare('operator_id',$this->operator_id);
		$criteria->compare('receiver_id',$this->receiver_id);
		$criteria->compare('antenna_id',$this->antenna_id);
		$criteria->compare('antenna_measurement',$this->antenna_measurement);
		$criteria->compare('antenna_position_id',$this->antenna_position_id);
		$criteria->compare('antenna_dh',$this->antenna_dh);
		$criteria->compare('sours_data',$this->sours_data,true);
		$criteria->compare('value_size',$this->value_size,true);
		$criteria->compare('support_data',$this->support_data,true);
		$criteria->compare('rinex_file',$this->rinex_file,true);
		$criteria->compare('apriori_x',$this->apriori_x);
		$criteria->compare('apriori_y',$this->apriori_y);
		$criteria->compare('apriori_z',$this->apriori_z);
		$criteria->compare('weather',$this->weather,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('id_user',$this->id_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Izmereniya the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
