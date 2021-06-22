<?php

/**
 * This is the model class for table "antennas".
 *
 * The followings are the available columns in table 'antennas':
 * @property string $set
 * @property string $id_user
 * @property string $igs_code
 * @property string $serial_num
 * @property double $vert_off
 * @property double $horiz_off
 */
class Antennas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'antennas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('set, id_user, igs_code, serial_num, vert_off, horiz_off', 'required'),
			array('vert_off, horiz_off', 'numerical'),
			array('set', 'length', 'max'=>8),
			array('id_user, igs_code, serial_num', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('set, id_user, igs_code, serial_num, vert_off, horiz_off', 'safe', 'on'=>'search'),
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
			'set' => 'Код Антены',
			'id_user' => 'Id user',
			'igs_code' => 'Igs код',
			'serial_num' => 'Серийный номер',
			'vert_off' => 'Вертикальное смещение',
			'horiz_off' => 'Горизонтальное смещение',
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

		$criteria->compare('t.set',$this->set,true);
		$criteria->compare('id_user',$this->id_user,true);
		$criteria->compare('igs_code',$this->igs_code,true);
		$criteria->compare('serial_num',$this->serial_num,true);
		$criteria->compare('vert_off',$this->vert_off);
		$criteria->compare('horiz_off',$this->horiz_off);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array(
                            'pageSize'=> 100,
                            ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Antennas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public static function all(){
            $models = self::model()->findAll();
            return CHtml::listData($models,'id','set');
             
            
        }
}
