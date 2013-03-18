<?php
$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Criar Usuario','url'=>array('create')),
	array('label'=>'Gerenciar Usuario','url'=>array('admin')),
);
?>

<h1>Usuários</h1>

<?php

	// $gridColumns
	$gridColumns = array(
		array('name'=>'idUsuario', 'header'=>'ID', 'htmlOptions'=>array('style'=>'width: 60px')),
		array('name'=>'email', 'header'=>'e-mail'),
		array('name'=>'senha', 'header'=>'senha'),
		array('name'=>'nome', 'header'=>'Nome'),
		array('name'=>'dtCriacao', 'header'=>'Data Criacao'),
		array('name'=>'dtAlteracao', 'header'=>'Data Alteracao'),
		array('name'=>'dtUltLogin', 'header'=>'Data Ultimo Login'),
		array(
			'htmlOptions' => array('nowrap'=>'nowrap'),
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'viewButtonUrl'=>null,
			'updateButtonUrl'=>null,
			'deleteButtonUrl'=>null,
		)
	);
	
	$this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'bordered',
	'dataProvider'=>$dataProvider,
	'template'=>"{items}",
	'columns'=>$gridColumns,
));

?>