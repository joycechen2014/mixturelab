<?php
   $file = "./contact.txt";
   $contact = file_get_contents($file);
   $string = explode("\n",$contact);
   foreach($string as $line){
	   echo '<div class="col-md-3"><p>'. $line .'</p></div>';
   }
   
 ?>
 