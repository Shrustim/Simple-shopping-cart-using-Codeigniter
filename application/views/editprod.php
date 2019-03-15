<html>
<head>
	<title>user</title>
</head>
<body>
<h1 align="center">Update Users Data</h1>
<div align="center">
<?php echo form_open('product/edit');?>

<br/>
<?php foreach ($eprod as $re): ?> 

<?php echo form_input( ['type'=>'hidden', 'name'=>'id','value'=>$re['id'] ] ) ;?>
<br/>Enter the Name of Product:
<?php echo form_input( ['name'=>'productnm','placeholder'=>'Enter Product Name','value'=>$re['product_name'] ] );  ?>
<br/><br/>
Enter the Price:
<?php echo form_input( ['name'=>'price','placeholder'=>'Enter Price','value'=>$re['price'] ] );  ?>

<br/>

<?php endforeach; ?> 
<br/>
<?php echo form_submit(['type'=>'submit','value'=>'Insert']);
 ?>     
<?php echo form_close(); ?>
</div>


 
</body>
</html>



 