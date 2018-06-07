<?php
$data=date('Y-m-d H:i:s');
echo $data; // 2009-07-09 22:30:59

$polaczenie=@mysql_connect('localhost','root','root123');
$db=mysql_select_db('sellthat',$polaczenie);

$wynik="INSERT INTO `sellthat`.`data` (`data`) VALUES ('$data')";
mysql_query($wynik);
?>