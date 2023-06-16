<?php
if(!empty($_GET["action"])) 
{
$productId = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '';
$quantity = isset($_POST['quantity']) ? htmlspecialchars($_POST['quantity']) : '';

switch($_GET["action"])
 {
	case "add":
		if(!empty($quantity)) {
								$stmt = $db->prepare("SELECT * FROM menu where m_id= ?");
								$stmt->bind_param('i',$productId);
								$stmt->execute();
								$productDetails = $stmt->get_result()->fetch_object();
                                $itemArray = array($productDetails->m_id=>array('title'=>$productDetails->title, 'm_id'=>$productDetails->m_id, 'quantity'=>$quantity, 'price'=>$productDetails->price));
					if(!empty($_SESSION["cart_item"])) 
					{
						if(in_array($productDetails->m_id,array_keys($_SESSION["cart_item"]))) 
						{
							foreach($_SESSION["cart_item"] as $k => $v) 
							{
								if($productDetails->m_id == $k) 
								{
									if(empty($_SESSION["cart_item"][$k]["quantity"])) 
									{
									$_SESSION["cart_item"][$k]["quantity"] = 0;
									}
									$_SESSION["cart_item"][$k]["quantity"] += $quantity;
								}
							}
						}
						else 
						{
								$_SESSION["cart_item"] = $_SESSION["cart_item"] + $itemArray;
						}
					} 
					else 
					{
						$_SESSION["cart_item"] = $itemArray;
					}
			}
			break;
			
	case "remove":
		if(!empty($_SESSION["cart_item"]))
			{
				foreach($_SESSION["cart_item"] as $k => $v) 
				{
					if($productId == $v['m_id'])
						unset($_SESSION["cart_item"][$k]);
				}
			}
			break;
			
	case "empty":
			unset($_SESSION["cart_item"]);
			break;
			
	case "check":
			header("location:checkout.php");
			break;
	}
}