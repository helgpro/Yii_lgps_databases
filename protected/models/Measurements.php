<?php

/**
 * This is the model class for table "measurements".
 *
 * The followings are the available columns in table 'measurements':
 * @property integer $id
 * @property integer $markerName_id
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
 * @property integer $antennaPosition
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
class Measurements extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
        public $markName_search;//новое свойство для поиска
	public function tableName()
	{
		return 'measurements';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('markerName_id, b_date, b_time, sample_rate, tour_id, agency_id, operator_id, receiver_id, antenna_id, antenna_measurement, antennaPosition, antenna_dh,  status_id ', 'required'),
			array('tour_id, agency_id, operator_id, receiver_id, antenna_id, antennaPosition, status_id', 'numerical', 'integerOnly'=>true),
			array('sample_rate, antenna_measurement, antenna_dh, apriori_x, apriori_y, apriori_z', 'numerical'),
			//array('$markerName_id', 'exist', 'on'=>'insert_post', 'attributeName'=>'$markers_name', 'className'=>'MarkNams'),
                        array('markerName_id','valid'),
                        array('rinex_file', 'length', 'max'=>12),
			array('id_user', 'length', 'max'=>30),
                        array( 'sours_data,id_user, e_date, e_time, value_size, support_data, rinex_file, apriori_x, apriori_y, apriori_z, weather, note,markName_search,value_size', 'safe' ),//разрешить валидацию новому поиску
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, markerName_id, b_date, b_time, e_date, e_time, sample_rate, tour_id, agency_id, operator_id, receiver_id, antenna_id, antenna_measurement, antennaPosition, antenna_dh, sours_data, value_size, support_data, rinex_file, apriori_x, apriori_y, apriori_z, weather, note, status_id, id_user', 'safe', 'on'=>'search'),
		);
	}
        public function valid($attributes,$parm )
        {
            $mark = $this->$attributes;
           $markReturn =MarkNams::model()->findByAttributes(array('markers_name'=>$mark));
         //  print_r($markReturn);
            if(!$markReturn){
            $this ->addError($attributes,'Необходимо добавить новую марку в Таблицу Марок');
            }
        
        }
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'mark'=>array(self::BELONGS_TO, 'MarkNams', 'markerName_id'),
                    'tour'=>array(self::BELONGS_TO, 'Tours', 'tour_id'),
                    'operator'=>array(self::BELONGS_TO, 'Operators', 'operator_id'),
                    'agency'=>array(self::BELONGS_TO, 'Agencies', 'agency_id'),
                    'receiver'=>array(self::BELONGS_TO, 'Receivers', 'receiver_id'),
                    'antenna'=>array(self::BELONGS_TO, 'Antennas', 'antenna_id'),
                    'antenPosition'=>array(self::BELONGS_TO, 'TypesOfAntennaPosition', 'antennaPosition'),
                    'status'=>array(self::BELONGS_TO, 'MeasurStatuses', 'status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'markerName_id' => 'Марка',
			'b_date' => 'Дата начала',
			'b_time' => 'Время нач',
			'e_date' => 'Дата оконч',
			'e_time' => 'Время окон',
			'sample_rate' => 'ΔT',
			'tour_id' => 'Кампания',
			'agency_id' => 'Организация',
			'operator_id' => 'Оператор',
			'receiver_id' => 'Прибор',
			'antenna_id' => 'Антенна',
			'antenna_measurement' => 'измеренная высота',
			'antennaPosition' => 'Тип высоты',
			'antenna_dh' => 'Высота расчитанная',
			'sours_data' => 'Имя файла',
			'value_size' => 'Размер файла',
			'support_data' => 'Доп файлы',
			'rinex_file' => 'Rinex',
			'apriori_x' => 'Коор X',
			'apriori_y' => 'Коор Y',
			'apriori_z' => 'Коор Z',
			'weather' => 'Погода',
			'note' => 'Заметки',
			'status_id' => 'Статус',
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

               //$criteria->with = array('mark');// использовать
               //
                $criteria->with = array('mark'=>array('select'=>'mark.markers_name'));
                //$criteria->with = array('mark'=>array('select'=>'mark.markers_name','together'=>true));
              // $criteria -> with  = array ( 'mark' );
               $criteria->compare( 'mark.markers_name', $this->markName_search, true );//искать м моделе марок и передавать в новое свойство
              //  $criteria->compare('tour',$this->tour,true);
               //  $criteria->together = true;
		$criteria->compare('t.id',$this->id);
		//$criteria->compare('markerName_id',$this->markerName_id);
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
		$criteria->compare('antennaPosition',$this->antennaPosition);
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
                        'pagination'=>array('pagesize'=>100),
                          
                        'sort'=>array(
                            'attributes'=>array(
                                'markName_search'=>array(
                                    'asc'=>'mark.markers_name',
                                    'desc'=>'mark.markers_name DESC',
                                ),
                                '*',
                            ),
                        ),
                    
                    
                    
		));
	}
            protected function beforeSave()
            {
                if(parent::beforeSave())
                {
                 //   if($this->isNewRecord)
                 //   {
                        $modeMN =MarkNams::model()->findByAttributes(array('markers_name'=>$this->markerName_id));
                        if($modeMN){
                        $this->markerName_id =$modeMN->id;
                        $this->b_date = date('Y-m-d', strtotime($this->b_date));//strtotime($this->date_start);
                        $this->e_date = date('Y-m-d', strtotime($this->e_date));//strtotime($this->date_start);
                         return true;
                        }
                        else return false;
                  //  }
                    
                 
                }
                
            }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Measurements the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
