<?php

    $nbImage=$_POST['nbI'];
    $n=1;
    //echo $nbImage;

    echo "<table><tbody>";

     if ($nbImage<=3){
        echo"<tr>"; 
        for ($i=1;$i<=$nbImage;$i++) {
            echo "<td><image src='image/PHP/img$n'width=250px></image></td>";
            $n++;
        }
        echo "</tr>";
    }

    else {
        while ($n<=$nbImage) {
            

            
            if ($nbImage-$n>=3){
                echo"<tr>";
                for ($i=1;$i<=3;$i++) {
                    echo "<td><image src='image/PHP/img$n'width=250px></image></td>";
                    $n++;
                }
                echo "</tr>";
            }
            else {
                echo"<tr>";
                for ($i=0;$i<=($nbImage-$n+1);$i++) {
                    echo "<td><image src='image/PHP/img$n'width=250px></image></td>";
                    $n++;
                }
                echo "</tr>";
  
            }
        }
        
    }

    echo "</tbody></table>";

?>


<!-- ?php
$dir = opendir("/image");
while($file = readdir($dir)) {
echo "<img src=$file/>\n";
} closedir($dir);


? -->