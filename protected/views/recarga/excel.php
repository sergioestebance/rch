<?php if($model!==null){ ?>

<table border="1">

<tr> 
<th>Compania</th>
<th>Celular</th>
<th>Monto</th>
<th>Comentario</th>
</tr>

 
<table border="1">

<?php foreach($model->recargas as $recarga) { ?> 
<tr <?php echo ($x++)%2==0?"style='background-color:#CCC'":"";?>>
<td><?php echo $recarga->compania;?></td>
<td><?php echo $recarga->celular;?></td>
<td><?php echo $recarga->monto;?></td>
<td><?php echo $recarga->comentario;?></td>
</tr>
<?php } ?>
<table>

<?php } ?>


 

