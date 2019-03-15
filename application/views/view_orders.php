<html>
<head><title>View Orders</title></head>
<body>

<h1 align="center">View Orders</h1>
<table border="2" align="center" >
    <tr style='margin:20px;padding:30px;'>
<th>Customer Id</th>
<th>Product Name and Quantity</th>
<th>Total Price</th>

</tr>
<?php ?>

<?php 


    foreach ($orders as $res): 



   
         echo "<tr style='margin:20px;padding:30px;'><td>";
       echo $res['custid'];
         echo "</td><td>";
         echo  $res['prodnmqty'];
         echo "</td><td>";
         echo $res['totalprice'];
         echo "</td>";
         
        
         echo "</td></tr>";           
     
    endforeach;  

 
?>
</table>
<br/><br/>
<h2 align="center"style="backgroung-color:red;">
<?php echo anchor('transaction','Go Back'); ?>
</h2>
</body>
</html>