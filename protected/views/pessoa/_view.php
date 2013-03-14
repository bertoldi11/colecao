<?php
/* @var $this PessoaController */
/* @var $data Pessoa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPessoa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPessoa), array('view', 'id'=>$data->idPessoa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>