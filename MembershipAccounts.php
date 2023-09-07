<?php
$Accounts = "Kurniawan";
echo " Login success! ".$Accounts."\n";

$notRegist = true;
$alreadyRegisted = false;

$checkMembership = $alreadyRegisted;
switch($checkMembership){
   case $notRegist: echo "ingin berlangganan?\n";
echo ">>> YA\n";
     $answerQuestion = $notRegist; 
      if($answerQuestion != $notRegist){
         echo "bayar dulu bos!";
      }else {
         echo "termikasih sudah berlangganan ".$Accounts;
       };
      break;
   case $alreadyRegisted: echo "selamat datang ".$Accounts;
      break;
   default: echo "error";
      break;
};


?>
