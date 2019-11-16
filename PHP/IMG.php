<?php

    $nbImage=$_POST['nbI'];
    $n=1;
    //echo $nbImage;

    echo "<table><tbody>";

        while ($n!=$nbImage) {
            echo"<tr>";
                for ($i=1;$i<=3;$i++) {
                    echo "<td><image src='image/PHP/img$n'width=250px></image></td>";
                    $n++;
                }
            echo "</tr>";
        }

    echo "</tbody></table>";

?>