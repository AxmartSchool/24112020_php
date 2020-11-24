<?php 

 $korok = array();

function feladat1 ()
{


    $valt = 0 ;

    echo"<br>Indulas: $valt <br>";

    do{

        $valt = $valt+rand(1,3);
        echo " $valt";

    }while($valt < 50);
    
}

function tombfeltoltes(){

    global $korok;
    
    for ($i=0; $i < 100; $i++) { 
        $korok[$i] = rand(8,80);
        echo " $korok[$i]";
    }

}

function tombkiir(){

    global $korok;
    
    echo "<hr>";
    
    foreach ($korok as $kor) {
        
        echo" $kor";
    
    }

}


function feladat2_1(){

    global $korok;

$i = 0;

while ($korok[$i] != 10 && $i < count($korok)) {
    $i++;
}




if($i == count($korok)){

    echo "nem talalt";

}else{

    echo"talalt";
}
}

?>