<?php

/**
 * This is the model class for table "movimentacao".
 *
 * The followings are the available columns in table 'movimentacao':
 * @property integer $idMovimentacao
 * @property integer $idLivro
 * @property integer $idPessoa
 * @property string $dtEmprestimo
 * @property string $dtDevolucao
 * @property string $devolvido
 *
 * The followings are the available model relations:
 * @property Livro $idLivro0
 * @property Pessoa $idPessoa0
 */
class Movimentacao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Movimentacao the static model class
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
		return 'movimentacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idLivro, idPessoa, dtEmprestimo', 'required'),
			array('idLivro, idPessoa', 'numerical', 'integerOnly'=>true),
			array('devolvido', 'length', 'max'=>1),
			array('dtDevolucao', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idMovimentacao, idLivro, idPessoa, dtEmprestimo, dtDevolucao, devolvido', 'safe', 'on'=>'search'),
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
			'idLivro0' => array(self::BELONGS_TO, 'Livro', 'idLivro'),
			'idPessoa0' => array(self::BELONGS_TO, 'Pessoa', 'idPessoa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMovimentacao' => 'Cod. Movimentacao',
			'idLivro' => 'Livro',
			'idPessoa' => 'Pessoa',
			'dtEmprestimo' => 'Data Emprestimo',
			'dtDevolucao' => 'Data Devolucao',
			'devolvido' => 'Devolvido',
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

		$criteria->compare('idMovimentacao',$this->idMovimentacao);
		$criteria->compare('idLivro',$this->idLivro);
		$criteria->compare('idPessoa',$this->idPessoa);
		$criteria->compare('dtEmprestimo',$this->dtEmprestimo,true);
		$criteria->compare('dtDevolucao',$this->dtDevolucao,true);
		$criteria->compare('devolvido',$this->devolvido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}