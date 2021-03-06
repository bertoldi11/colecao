<?php

/**
 * ConsultaMovimentacaoForm class.
 * ConsultaMovimentacaoForm is the data structure for keeping
 * consultaMovimentacao form data. It is used by the 'movimentacao' action of 'ConsultaController'.
 */
class ConsultaMovimentacaoForm extends CFormModel
{
	public $dtIni;
	public $dtFim;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('dtIni, dtFim', 'required'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'dtIni'=>'Início',
			'dtFim'=>'Fim',
		);
	}
}