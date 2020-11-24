<?php 

if( $_POST["tavolsag"] != ""){

    $tavolsag = $_POST["tavolsag"];
    $tipus = $_POST["tipus"];
    $kedvezmeny = $_POST["kedvezmeny"];


    echo (50*$tavolsag*$kedvezmeny*$tipus);


}else{

    header("Location:/suli/24112020/jegyrendeles.php");

}



?>