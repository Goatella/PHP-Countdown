<?php 

//Below is the target date, currently set to Dec 25 2014
$target = mktime(0, 0, 0, 12, 25, 2014) ;

//Get today's date
$today = time () ;

//How much time between them
$difference =($target-$today) ;

//Convert seconds to days
$days =(int) ($difference/86400) ;

//Output
print "Christmas is in $days days";
?>
