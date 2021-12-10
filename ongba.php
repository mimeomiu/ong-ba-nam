<?php
for($i = 1; $i<=20; $i++) {
if ($i%3 == 0 && $i%5 == 0) {
    echo ("ong ba nam tay ba nam")."\n";
}
    elseif ($i%5 == 0) {
        echo ("ba nam")."\n"; 
     } 
            elseif ($i%3 == 0 ) {
                echo ("ong ba")."\n";
            }
            else {
                echo ($i)."\n";
            }
    
}
?>


