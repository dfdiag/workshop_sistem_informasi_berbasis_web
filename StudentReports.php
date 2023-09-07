<?php
$Accounts = "lepi";
$finalResult = "B";

switch($finalResult){
   case "A": echo "Amazing! ". $Accounts;
      break;
   case "B": echo "Great! ".$Accounts;
      break;
   case "C": echo "Keep learning! .$Accounts";
      break;
   case "D": echo "Bad !". $Accounts; 
      break;
   default : echo "Final Result error";
      break;
}
?>
