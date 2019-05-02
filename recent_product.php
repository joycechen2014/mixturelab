<?php
//recently visit;
	if(isset($_COOKIE['RecentlyProducts'])){
		echo "<div><a href=# ><b><u><h6>Rcently Visit<h6></u></b></div>";
		echo "<div class='row'>";
		$RecentlyProducts = $_COOKIE['RecentlyProducts'];
		$RecentlyProductsArray=explode(",", $RecentlyProducts);
		foreach($RecentlyProductsArray as $id){
			switch($id){
				case 'austrilia':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Austrila.php' class='destination-entry-recent img' style='background-image: url(images/Austrilia.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Austrilia</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'japan':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Japan.php' class='destination-entry-recent img' style='background-image: url(images/japan.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Japan</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'italy':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Italy.php' class='destination-entry-recent img' style='background-image: url(images/Italy.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Italy</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'china':				
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='china.php' class='destination-entry-recent img' style='background-image: url(images/China.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>China</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";	
					break;
				case 'greece':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='greece.php' class='destination-entry-recent img' style='background-image: url(images/Greece.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Greece</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'india':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='india.php' class='destination-entry-recent img' style='background-image: url(images/India.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>India</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;	
				case 'paris':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='paris.php' class='destination-entry-recent img' style='background-image: url(images/paris.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Paris</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'russia':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Russia.php' class='destination-entry-recent img' style='background-image: url(images/Russia.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Russia</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'thailand':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Thailand.php' class='destination-entry-recent img' style='background-image: url(images/Thailand.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Thailand</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'turkey':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Turkey.php' class='destination-entry-recent img' style='background-image: url(images/Turkey.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Turkey</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;				   
			}
		}
		echo "</div>";
	}

// Most visit;
	if(isset($_COOKIE["MostProducts"])){
		echo "<div><a href=# ><b><u><h6>Most Visit<h6></u></b></div>";
		echo "<div class='row'>";
		$MostProductsArrayStr = $_COOKIE["MostProducts"];
		$MostProductsArray=json_decode($MostProductsArrayStr,true);
		arsort($MostProductsArray);
		
  
		foreach(array_slice($MostProductsArray, 0, 5) as $key =>$value){
			//echo "key:".$key;
			//echo "value:".$value;
			switch($key){
				case 'austrilia':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Austrila.php' class='destination-entry-recent img' style='background-image: url(images/Austrilia.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Austrilia</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'japan':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Japan.php' class='destination-entry-recent img' style='background-image: url(images/japan.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Japan</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'italy':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Italy.php' class='destination-entry-recent img' style='background-image: url(images/Italy.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Italy</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'china':				
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='china.php' class='destination-entry-recent img' style='background-image: url(images/China.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>China</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";	
					break;
				case 'greece':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='greece.php' class='destination-entry-recent img' style='background-image: url(images/Greece.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Greece</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'india':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='india.php' class='destination-entry-recent img' style='background-image: url(images/India.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>India</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;	
				case 'paris':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='paris.php' class='destination-entry-recent img' style='background-image: url(images/paris.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Paris</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'russia':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Russia.php' class='destination-entry-recent img' style='background-image: url(images/Russia.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Russia</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'thailand':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Thailand.php' class='destination-entry-recent img' style='background-image: url(images/Thailand.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Thailand</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;
				case 'turkey':
					echo "<div class='col-20 ftco-animate'>";
					echo "<a href='Turkey.php' class='destination-entry-recent img' style='background-image: url(images/Turkey.jpg);'>";
					echo "<div class='text text-center'>";
					echo "<h5>Turkey</h5>";
					echo "</div>";
					echo "</a>";
					echo "</div>";
					break;				   
			}
		}	
		echo "</div>";
	}
?>


 			
				




					