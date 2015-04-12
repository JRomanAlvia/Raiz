<?php

/**
 * This is the model class for table "notas".
 *
 * The followings are the available columns in table 'notas':
 * @property integer $id
 * @property string $comentario
 * @property integer $tablas_id
 *
 * The followings are the available model relations:
 * @property Tablas $tablas
 */
class Notas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Notas the static model class
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
		return 'notas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tablas_id', 'required'),
			array('tablas_id', 'numerical', 'integerOnly'=>true),
			array('comentario', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, comentario, tablas_id', 'safe', 'on'=>'search'),
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
			'tablas' => array(self::BELONGS_TO, 'Tablas', 'tablas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'comentario' => 'Comentario',
			'tablas_id' => 'Tablas',
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
		$criteria->compare('comentario',$this->comentario,true);
		$criteria->compare('tablas_id',$this->tablas_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}