<?php 
$tomb = array();

if (isset($_GET["gomb"])) {

    for ($i=0; $i < $_GET["elemszam"]; $i++) { 
        
        $tomb[$i] = rand(-100,100);
        echo " $tomb[$i]";
    }

    echo"<br>";

    asort($tomb);

    $osszeg = 0;
    foreach ($tomb as $elem) {

        echo " $elem";
        $osszeg += $elem;
    }
    echo "<br> $osszeg";

}

?>
<form action="" method="GET">
Hany elemu tombot generaljak?
<select name="elemszam">
<option value="5">5</option>
<option value="10">10</option>
<option value="20">20</option>


</select>
<input type="submit" name="gomb" value="generalj">

</form>