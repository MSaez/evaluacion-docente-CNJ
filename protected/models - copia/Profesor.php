<?php

/**
 * This is the model class for table "profesor".
 *
 * The followings are the available columns in table 'profesor':
 * @property string $pro_rut
 * @property string $pro_nombres
 * @property string $pro_paterno
 * @property string $pro_materno

 *
 * The followings are the available model relations:
 * @property Nota[] $notas

 */
class Profesor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'profesor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pro_rut, pro_nombres, pro_paterno, pro_materno', 'required'),
			array('pro_rut', 'length', 'max'=>12),

			array('pro_nombres, pro_paterno, pro_materno', 'length', 'max'=>256),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('pro_rut, pro_nombres, pro_paterno, pro_materno', 'safe', 'on'=>'search'),
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
			'notas' => array(self::HAS_MANY, 'Nota', 'pro_rut'),
			'impartes' => array(self::HAS_MANY, 'Imparte', 'pro_rut'),
			
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pro_rut' => 'Rut',
			'pro_nombres' => 'Nombres',
			'pro_paterno' => 'Apellido Paterno',
			'pro_materno' => 'Apellido Materno',
			
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

		$criteria->compare('pro_rut',$this->pro_rut,true);
		$criteria->compare('pro_nombres',$this->pro_nombres,true);
		$criteria->compare('pro_paterno',$this->pro_paterno,true);
		$criteria->compare('pro_materno',$this->pro_materno,true);
	

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Profesor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getFullName() {
        $fullName = (! empty ( $this->pro_nombres )) ? $this->pro_nombres : '';
        $fullName .= (! empty ( $this->pro_paterno )) ? ((! empty ( $fullName )) ? " " . $this->pro_paterno : $this->pro_paterno) : '';
        $fullName .= (! empty ( $this->pro_materno )) ? ((! empty ( $fullName )) ? " " . $this->pro_materno : $this->pro_materno) : '';
        return $fullName;
	}
}
