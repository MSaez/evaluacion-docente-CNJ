<?php


class PromedioForm extends CFormModel
{
	public $pro_rut;
	public $obs; //cant. de observaciones
	public $promedio
	
	
	
	/**
	 * Reglas de validación
	 */
	public function rules()
	{
		return array(
			// campos obligatorios
			array('pro_rut, obs', 'required'),
			// seteamos el largo maximo de los campos de texto
			array('pro_rut', 'length', 'max'=>12, 'message' => 'Rut no debe superar los 12 carácteres.'),
			);
	}
	

	/**
	 * Etiquetas de los atributos
	 */
	public function attributeLabels()
	{
		return array(
			'pro_rut' => 'Profesor',
			'obs' => 'Observaciones',
			);
	}
}