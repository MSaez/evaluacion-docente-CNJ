<?php


class RetroalimentacionForm extends CFormModel
{
	public $a1_positivos;
	public $a1_mejorar;
	public $a2_positivos;
	public $a2_mejorar;
	public $a3_positivos;
	public $a3_mejorar;
	public $fecha_retro;
	
	/**
	 * Reglas de validación
	 */
	public function rules()
	{
		return array(
			// campos obligatorios
			array('a1_positivos, a2_positivos, a3_positivos, a1_mejorar, a2_mejorar, a3_mejorar', 'required'),
			// seteamos el largo maximo de los campos de texto
			array('a1_positivos, a2_positivos, a3_positivos, a1_mejorar, a2_mejorar, a3_mejorar', 'length', 'max'=>1024, 'message' => 'El texto es muy grande.'),
			);
	}
	

	/**
	 * Etiquetas de los atributos
	 */
	public function attributeLabels()
	{
		return array(
			'fecha_retro' => 'Fecha',
			'a1_positivos' => 'Aspectos positivos',
			'a1_mejorar' => 'Práctica a mejorar',
			'a2_positivos' => 'Aspectos positivos',
			'a2_mejorar' => 'Práctica a mejorar',
			'a3_positivos' => 'Aspectos positivos',
			'a3_mejorar' => 'Práctica a mejorar',
		);
	}
}