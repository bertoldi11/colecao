<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idUsuario), array('view', 'id'=>$data->idUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php echo CHtml::encode($data->senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtCriacao')); ?>:</b>
	<?php echo CHtml::encode($data->dtCriacao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtAlteracao')); ?>:</b>
	<?php echo CHtml::encode($data->dtAlteracao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dtUltLogin')); ?>:</b>
	<?php echo CHtml::encode($data->dtUltLogin); ?>
	<br />


</div>