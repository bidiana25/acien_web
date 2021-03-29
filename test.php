<?php


$today = date('Y-m-d');


$total_day=35;
$total_day_text ="+".$total_day." day";
$new_expire_date = date('Y-m-d',(strtotime ( $total_day_text , strtotime ( $today) ) ));


echo $new_expire_date;
?>