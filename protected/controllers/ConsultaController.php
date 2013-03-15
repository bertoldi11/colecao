<?php

class ConsultaController extends Controller
{
	public $layout='//layouts/column2';
	
	
	public function filters()
	{
		return array(
			'accessControl'
		);
	}
	
	public function accessRules()
	{
		return array(
			array(
				'allow',
				'actions'=>array('index','livro', 'Movimentacao'),
				'users'=>array('@')
			),
			array(
				'deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	
	public function actionIndex(){
		$this->render('index');
	}
	
	public function actionLivro(){
		
		$model = new ConsultaLivroForm;
		$dadosRetorno = array('model'=>$model);
		
		if(isset($_POST['ConsultaLivroForm']))
		{
			$model->attributes = $_POST['ConsultaLivroForm'];
			if($model->validate())
			{
				$dadosRetorno['dataProvider'] = new CActiveDataProvider('Livro', array(
				    'criteria'=>array(
				    	'condition' => 'titulo like :titulo',
				    	'params'=>array(':titulo'=>$model->titulo."%"),
				        'with'=>array(
				        	'autors',
				        	'movimentacaos' => array(
								'order'=>'idMovimentacao DESC'
							)
						),
				    ),
				    'pagination'=>array(
				        'pageSize'=>5,
				    ),
				));
			}
		}	

		$this->render('livros',$dadosRetorno);

	}

	public function actionMovimentacao()
	{
		$model = new ConsultaMovimentacaoForm;
		$dadosRetorno = array('model'=>$model);
		
		if(isset($_POST['ConsultaMovimentacaoForm']))
		{
			$model->attributes=$_POST['ConsultaMovimentacaoForm'];
			if($model->validate())
			{
				$dadosRetorno['dataProvider'] = new CActiveDataProvider('Movimentacao', array(
				    'criteria'=>array(
				    	'condition' => 'dtEmprestimo between :dtIni and :dtFim',
				    	'params'=>array(':dtIni'=>$model->dtIni, ':dtFim'=>$model->dtFim),
				        'with'=>array(
				        	'idLivro0',
				        	'idPessoa0'
						),
				    ),
				    'pagination'=>array(
				        'pageSize'=>5,
				    ),
				));
			}
		}
			
		$this->render('movimentacao',$dadosRetorno);
	}
}