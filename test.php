<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 100; $x++) {
  if($x % 3 == 0 && $x % 5 == 0)
	echo "$x = TigaLima <br>";
    elseif($x % 3 == 0)
    echo "$x = Tiga <br>";
    elseif($x % 5 ==0)
    echo "$x = Lima <br>";
    elseif($x % 3 != 0 && $x % 5 != 0)
    echo "$x <br>";
}
?>  

</body>
</html>
