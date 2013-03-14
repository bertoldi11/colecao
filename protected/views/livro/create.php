<?php
/* @var $this LivroController */
/* @var $model Livro */

$this->breadcrumbs=array(
	'Livros'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Livro', 'url'=>array('index')),
	array('label'=>'Gerenciar Livro', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Livro</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>