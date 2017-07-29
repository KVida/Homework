<?php 
	//if (isset($_GET)); 
		id = $_GET['id'];//page_control
		swich ($_GET['r']){
			case 'product':
				include 'product.php';
				brake;
			default:
				include 'products.php';
				brake;			
		}
	/*}*/
 ?>