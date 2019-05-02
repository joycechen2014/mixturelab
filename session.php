<?php
	
	//RecentlyProducts;
	$TempNum = 5;
    if(isset($_COOKIE['RecentlyProducts'])){
		$RecentlyProducts=$_COOKIE['RecentlyProducts'];
		$RecentlyProductsArray=explode(",", $RecentlyProducts);
		$RecentlyProductsNum=count($RecentlyProductsArray); 
		
		if (!in_array($id, $RecentlyProductsArray)){  //if id not in cookie, add it;		
			if($RecentlyProductsNum <$TempNum) {
				if($RecentlyProducts==""){
					$RecentlyProductsNew = $id;
				}
				else{
					$RecentlyProductsNew=$RecentlyProducts.",".$id;
				}
			}else{
				$pos=strpos($RecentlyProducts,",")+1; 
				$FirstString=substr($RecentlyProducts,0,$pos); 
				$RecentlyProducts=str_replace($FirstString,"",$RecentlyProducts); 
				$RecentlyProductsNew=$RecentlyProducts.",".$id; 
			}
		}
		else{  // if id already in cookie, keep it same;
			$RecentlyProductsNew = $RecentlyProducts;
		}
    }
    else{
		$RecentlyProductsNew = $id;
    }
	setcookie("RecentlyProducts", $RecentlyProductsNew,time()+3600*1,'/');
	
	
	//MostProducts;
	if(isset($_COOKIE['MostProducts'])){         
		$MostProductsArrayStr = $_COOKIE['MostProducts'];   
		$MostProductsArray = json_decode($MostProductsArrayStr,true);
		if (array_key_exists("$id", $MostProductsArray)){    //if id already exist ,add 1 to it ;
			$MostProductsArray[$id]=$MostProductsArray[$id]+1;			
		}else{
			$MostProductsArray[$id] = 1;   
		}       
	}
	else{
		$MostProductsArray = array($id =>1);
	}
	setcookie("MostProducts",json_encode($MostProductsArray),time()+3600*1, '/');
?>