<?php
        $file = fopen("log.csv", "r");
        if(!$file){ // ceh sarebbe la stessa cosa diì $file === false
            die("Errore nell'apertura del file");

        }


        echo "<table>";

        while(!feof($file)){
            $row = fgets($file);
            $element = explode("," , $row);

            if($element[0] === "timestamp"){
                echo "<tr><th>" . $element[0] . "</th><th>" . $element[1] . "</th><th>". $element[2] .
                "</th><th>" . $element[3] . "</th><th>" . $element[4] . "</th><th>" . $element[5] .
                "</th><th>" . $element[6] . "</th><th>" . $element[7] . "</th><th>" . $element[8] . "</th></tr>";
            }else{
                echo "<tr><td>" . $element[0] . "</td><td>" . $element[1] . "</td><td>". $element[2] .
                "</td><td>" . $element[3] . "</td><td>" . $element[4] . "</td><td>" . $element[5] .
                "</td><td>" . $element[6] . "</td><td>" . $element[7] . "</td><td>" . $element[8] . "</td></tr>";
            }
        }

        echo "</table>";

        fclose($file);

?>