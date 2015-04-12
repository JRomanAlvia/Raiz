<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property integer $id
 * @property string $nick
 * @property string $email
 * @property string $password
 * @property string $tipo
 * @property string $nombre
 * @property string $apellido
 *
 * The followings are the available model relations:
 * @property Cultivo[] $cultivos
 * @property UsuarioSkill[] $usuarioSkills
 */
class Usuarios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuarios the static model class
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
		return 'usuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nick, email, password, tipo, nombre, apellido', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nick, email, password, tipo, nombre, apellido', 'safe', 'on'=>'search'),
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
			'cultivos' => array(self::HAS_MANY, 'Cultivo', 'Usuarios_id'),
			'usuarioSkills' => array(self::HAS_MANY, 'UsuarioSkill', 'Usuarios_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nick' => 'Nick',
			'email' => 'Email',
			'password' => 'Password',
			'tipo' => 'Tipo',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
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
		$criteria->compare('nick',$this->nick,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}