<?php
    $myfile = fopen("note.txt", "w");
    $txt = "Hi, I am Tushar Sinha, Roll no. A059 from batch B3 & currently pursuing MCA from MPSTME";
    fwrite($myfile, $txt);
    fclose($myfile);
    
    
    ?>