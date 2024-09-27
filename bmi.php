<?php
$conn=mysqli_connect('localhost','root','','egzamin');

$a=$_POST['waga'];
$b=$_POST['wzrost'];
$d=$b*$b;
$wynik=($a/$d)*10000;

$c="INSERT INTO `wynik` (`id`, `bmi_id`, `data_pomiaru`, `wynik`) VALUES (NULL, '3', '2020-05-10', '$wynik');";
mysqli_query($conn,$c); 
echo "$wynik";
mysqli_close($conn);
?>
