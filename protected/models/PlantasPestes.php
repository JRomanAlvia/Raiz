<?php

/**
 * This is the model class for table "plantas_pestes".
 *
 * The followings are the available columns in table 'plantas_pestes':
 * @property integer $id
 * @property integer $Plantas_id
 * @property integer $Pestes_id
 * @property integer $Pesticidas_id
 *
 * The followings are the available model relations:
 * @property Catastrofes[] $catastrofes
 * @property Pestes $pestes
 * @property Pesticidas $pesticidas
 * @property Plantas $plantas
 */
class PlantasPestes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PlantasPestes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plantas_pestes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Plantas_id, Pestes_id, Pesticidas_id', 'required'),
			array('Plantas_id, Pestes_id, Pesticidas_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, Plantas_id, Pestes_id, Pesticidas_id', 'safe', 'on'=>'search'),
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
			'catastrofes' => array(self::HAS_MANY, 'Catastrofes', 'Plantas_pestes_id'),
			'pestes' => array(self::BELONGS_TO, 'Pestes', 'Pestes_id'),
			'pesticidas' => array(self::BELONGS_TO, 'Pesticidas', 'Pesticidas_id'),
			'plantas' => array(self::BELONGS_TO, 'Plantas', 'Plantas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Plantas_id' => 'Plantas',
			'Pestes_id' => 'Pestes',
			'Pesticidas_id' => 'Pesticidas',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Plantas_id',$this->Plantas_id);
		$criteria->compare('Pestes_id',$this->Pestes_id);
		$criteria->compare('Pesticidas_id',$this->Pesticidas_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}