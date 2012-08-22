<?php if($model!==null){ ?>

<table border="1">

<tr>
<th>Nombre: </th>

<td><?php echo $model->username;?></td>
</tr>

<tr>
<th>Compania</th>
<th>Celular</th>
<th>Monto</th>
<th>Comentario</th>
<th>Estado</th>
</tr>

 
<table border="1">

<?php foreach($model->locals as $local) { ?> 
	<tr>
	<th><?php echo $local->nombre;?></th>
	</tr>	
	<?php foreach($model->recargas as $recarga) { ?> 
		<tr <?php echo ($x++)%2==0?"style='background-color:#CCC'":"";?>>
		<td><?php echo $recarga->compania;?></td>
		<td><?php echo $recarga->celular;?></td>
		<td><?php echo $recarga->monto;?></td>
		<td><?php echo $recarga->comentario;?></td>
		<td><?php echo $recarga->estado;?></td>
		</tr>
	<?php } ?>
<?php } ?>
<table>

<?php } ?>


 

