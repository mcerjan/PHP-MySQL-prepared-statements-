<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            require 'konekcija.php';

            $query_tpl="SELECT nazPred from pred group by nazPred";

            if($stmt = $mysqli->prepare($query_tpl))
            {
                $stmt->execute();
                $stmt->bind_result($rez);
                    while($stmt->fetch())
                        {
                            echo $rez.'<br/>';
                        }
                $stmt->close();
            }
            $mysqli->close();
        ?>
    </body>
</html>

