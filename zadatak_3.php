<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php

            require 'konekcija.php';

            $query_tpl= "SELECT imeStud, prezStud "
                    . "from stud "
                    . "WHERE prezStud LIKE ?";

            $naziv="B%";

            if($stmt = $mysqli->prepare($query_tpl))
            {
                $stmt->bind_param('s',$naziv);
                $stmt->execute();
                $stmt->bind_result($rez1, $rez2);
                    while($stmt->fetch())
                        {
                            echo $rez1.' '.$rez2.'<br/>';
                        }
                $stmt->close();
            }
            $mysqli->close();
        ?>
    </body>
</html>





