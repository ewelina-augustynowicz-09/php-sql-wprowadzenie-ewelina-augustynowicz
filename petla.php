<?php
echo("Pętla");
function nazwa($liczba){
   echo("<li>funkcja");
   echo('<li>test ".$liczba);
   for($i=1;$i<$liczba;$i++){
        echo("<li>to jest w pętli: ".$i);
   }
}

nazwa(90);

?>
