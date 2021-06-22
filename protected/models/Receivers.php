<?php

/**
 * This is the model class for table "receivers".
 *
 * The followings are the available columns in table 'receivers':
 * @property integer $id
 * @property string $setI
 * @property string $igs_code
 * @property string $serial_num
 * @property string $id_user
 */
class Receivers extends CActiveRecord
{
	/**
	 * @return string the associated database table name 
	 */
	public function tableName()
	{
		return 'receivers';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('setI, igs_code, serial_num', 'required'),
			array('setI', 'length', 'max'=>8),
			array('igs_code, serial_num, id_user', 'length', 'max'=>30),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, setI, igs_code, serial_num, id_user', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'setI' => 'Прибор',
			'igs_code' => 'IGS код прибора',
			'serial_num' => 'Серийный номер',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('setI',$this->setI,true);                   //$criteria->compare('`set`',$this->set,true); mojno bilo tak 
		$criteria->compare('igs_code',$this->igs_code,true);
		$criteria->compare('serial_num',$this->serial_num,true);
		$criteria->compare('id_user',$this->id_user,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination'=>array('pagesize'=>100),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Receivers the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        public static function all(){
            $models = self::model()->findAll();
            return CHtml::listData($models,'id','setI');
             
            
        }
}
