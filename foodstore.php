<!DOCTYPE html>
<html>
	<head> 
		<title> Menu JBU </title>
		
		<link rel="stylesheet" href="Lcss.css" />
		<script src="Ljs.js"> </script>
		<?php include ("connect.php"); ?>
		
		<script>

		function popupfunction(x)

		{

			document.getElementById('popup'+x).style.display='block';

			document.getElementById('fade'+x).style.display='block';

		}



		function popupclose(x)

		{

			document.getElementById('popup'+x).style.display='none';

			document.getElementById('fade'+x).style.display='none';

		}

		 function displaymycart() {
            document.getElementById('myCartDisplay').style.display = 'block';
        }

        function addItem(x) {
            document.getElementById('myCartDisplay').innerHTML +=  x + "<br>";
			
		}


</script>
	</head>


	<body bgcolor="#03fcc6">
		<br><br><br>
	
	<h1 align="center"> <br> <img src="img/JBU.jpg" alt="JBU1" width="75" height="75"> JBU Food Store <img src="img/JBU.jpg" alt="JBU2" width="75" height="75"> <br> <br> </h1>
	<center>
	<img src="img/KsJVhw9T_400x400.jpg" alt="JBU" width="300" height="300">
	</center>

	<center>
	<p align="center"><b> Welcome to JBU's Food Store - open for faculty/staff and students! </b><p> 
	</center>
	
	
	<div class="cart" id="cartt">
    <img src="img/cart.jpg" alt="JBUC" width="150" height="150" onclick="displaymycart()">
	</div>
	<div class="mycart" id="myCartDisplay" style="display:none;">

	</div>
	
	
	
		
	

		</center>
		
		<?php
		$count=1;
		$sql_product="SELECT * FROM product_tab";
		$result_product=$connect->query($sql_product);
		?>
		<center>
		<table width=80% border=1 bgcolor="#0DF5E4">
		<tr>
		<?php
		while($row_product = $result_product->fetch_assoc())
			{
				
				?>
					<td><?php echo "<img src='".$row_product["p_image"]."' /><br>" ?>
							<div>
							<?php echo $row_product["product_name"]."<br>"; ?>
							<?php echo $row_product["unit_price"]."<br>"; ?>
							<?php echo $row_product["vendor"]."<br>"; ?>
							<button onClick="javascript:addItem('<?php echo $row_product["product_name"] ?>')"> Add to Cart </button>
							</div>
						</td>
						
						
						
					
		<?php
		if ($count>=4)
		{ echo "</tr><tr>";
			$count=1;
			}
		
		else
		{
			$count++;
			}
		}
		?>
		</table>
		</center>
	</body>
</html>
