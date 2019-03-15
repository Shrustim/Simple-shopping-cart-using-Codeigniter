 <!DOCTYPE html>
<html>
<head>
	<title>product</title>
</head>
<body>

<div align="center">
<?php echo form_open('product/insert');?>

<br/>
Enter the Name of Product:
<?php echo form_input( ['name'=>'productnm','placeholder'=>'Enter Product Name','value'=>""] );  ?>
<br/><br/>
Enter the Price of Product:
<?php echo form_input( ['name'=>'price','placeholder'=>'Enter Price','value'=>""] );  ?>
<?php  //echo form_error('productnm'); ?>

<br/>

<br/><br/>

<?php echo form_submit(['type'=>'submit','value'=>'Insert']);
      echo form_reset(['type'=>'reset','value'=>'Reset']);  ?>
<?php echo form_close(); ?>
</div>


 


<h1 align="center">Product Details</h1>

<br/><br/>
<div align="center">
<table border=1>
<tr>
    <td>Product Id</td>
    <td>Product Name</td>
    <td>Price</td>
   
    <td>Action</td>
</tr>

<?php 
   foreach ($prod as $re): 
    echo "<tr>"
         ."<td>". $re['id']."</td>"
         ."<td>". $re['product_name']."</td>"
         ."<td>".$re['price']."</td>"
         ."<td><a href='".base_url()."product/view/". $re['id']." '>Edit </a> | <a href='".base_url()."product/delete/". $re['id']." '> Delete</a> </td>"
         ."</tr>";           
    
    endforeach;  


?>
</table>
</div>




</body>
</html>





