 <!DOCTYPE html>
<html>
<head>
	<title>Display Products</title>
</head>
<body>

<div style="float:left;margin-left:100px;">
<h1 align="center">Product Details</h1>

<br/><br/>


<table>
	<tr style='margin:20px;'>
<th>Product Name</th>
<th>Product Price</th>
<th>Add To Cart</th>
</tr>
<?php ?>

<?php 


   foreach ($disprod as $re): 

echo form_open('transaction/add');

   
         echo "<tr style='margin:20px;'><td>";
         echo  $re['product_name'];
         echo "</td><td>";
         echo $re['price'];
         echo "</td>";
         echo form_hidden('id',$re['id']);
        echo "<td>". form_submit('action','Add To Cart');
         
         echo "</td></tr>";           
 echo form_close();    
    endforeach;  

 
?>
</table>
<br/><br/>






<?php if($cart=$this->cart->contents()): ?>
    
<table border='2'  >
<caption><strong>Shopping Cart</strong></caption>
<thead>
<tr>
<td><strong>Item Name</strong></td>
<td><strong>Price</strong></td>
<td><strong>Quantity</strong></td>
<td><strong>Remove</strong></td>
</tr>
</thead>
<?php foreach($cart as $item): ?>
<tr>
    <td><?php echo $item['name'];?></td>
     <td><?php echo $item['subtotal'];?></td>
      <td><?php echo $item['qty'];?></td>
      <td><?php echo anchor('transaction/remove/'.$item['rowid'],'Remove'); ?></td>
</tr>

<?php endforeach; ?>
<tr>
    <td colspan='3'><strong>Total</strong></td>
    <td><?php echo $this->cart->total(); ?></td>
</tr>
</table>
<?php //print_r($cart); ?>


<?php endif; ?>
</div>







<div align="center">
<h1><b>Transaction Order </b></h1>
<form action='transaction/order' method="POST">

    Product Names and Quantity:<input type="text" name="prodnmqty" value='
<?php foreach($cart as $item):
echo " "; 
echo $item['name'];
echo "  ";     
echo $item['qty'];
 endforeach; ?>
    ' /><br/><br/>

     Total Price:<input type="text" name="totalprice" value='
<?php echo $this->cart->total(); ?>
     ' /><br/><br/>
    <input type="submit" name="submit" value='Order Now' />
    
</form>
</div>
<h2 align="center" style="backgroung-color:red;">
<?php echo anchor('transaction/vieworders','view orders'); ?>
</h2>
</body>
</html>
 