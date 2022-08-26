<?php
//while loop
$a = 1;
// while($a<=5){
//     echo "its while <br>";
//     $a++;
// }
//do while
// do{
//     echo $a;
//     $a++;
// }while($a<=5)

//forloop
// for($i=0;$i<=5;$i++){
//     echo "for loop <br>";

// $data = array('Aiswarya','Sheena','Swetha','Najila');
// foreach($data as $name){//here $data is al value . we asign each value to $name so we get separate value
//     echo $name."<br><br>";
// }

//break
for($i=1;$i<=10;$i++){
    if($i==5){
        // break;
        continue;//1234678910 this is output
    }
    echo $i;
    
}

?>